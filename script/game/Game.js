import Phaser from "phaser";
import findPath from "./findPath.js";
import {createLinkAnims} from "./linkAnims.js";
import("./link.js");
export default class Game extends Phaser.Scene {
  constructor() {
    super("startGame");
    this.movePath = [];
  }
  moveAlong(path) {
    if (!path || path.length <= 0) {
      return;
    }
    this.movePath = path;
    this.moveTo(this.movePath.shift());
  }
  moveTo(target) {
    this.moveToTarget = target;
  }
  preload() {
    this.cursors = this.input.keyboard.createCursorKeys();
  }
  create() {
    createLinkAnims(this.anims);
    let debug = true;
    const map = this.make.tilemap({key: "overworld_tilemap"});
    const tileset = map.addTilesetImage("overworld-tiles", "overworld_tiles");
    const overworldLayer = map.createLayer("overworld", tileset);
    const wallsLayer = map.createLayer("walls", tileset);
    const interactiveLayer = map.createLayer("interactive", tileset);
    const removableLayer = map.createLayer("removable", tileset);
    overworldLayer.setCollisionByProperty({collides: true});
    wallsLayer.setCollisionByProperty({collides: true});
    removableLayer.setCollisionByProperty({collides: true});
    if (debug = false) {
      const debugGraphics = this.add.graphics().setAlpha(0.5);
      overworldLayer.renderDebug(debugGraphics, {
        tileColor: null,
        collidingTileColor: new Phaser.Display.Color(108, 0, 255, 255),
        faceColor: new Phaser.Display.Color(40, 39, 37, 255)
      });
      wallsLayer.renderDebug(debugGraphics, {
        tileColor: null,
        collidingTileColor: new Phaser.Display.Color(108, 0, 255, 255),
        faceColor: new Phaser.Display.Color(40, 39, 37, 255)
      });
      removableLayer.renderDebug(debugGraphics, {
        tileColor: null,
        collidingTileColor: new Phaser.Display.Color(108, 0, 255, 255),
        faceColor: new Phaser.Display.Color(40, 39, 37, 255)
      });
    }
    this.link = this.add.link(1912, 1312, "link");
    this.physics.add.collider(this.link, overworldLayer);
    this.physics.add.collider(this.link, wallsLayer);
    this.physics.add.collider(this.link, removableLayer);
    this.cameras.main.startFollow(this.link, true);
    this.input.on(Phaser.Input.Events.POINTER_UP, (pointer) => {
      const {worldX, worldY} = pointer;
      const startVec = overworldLayer.worldToTileXY(this.link.x, this.link.y);
      const targetVec = overworldLayer.worldToTileXY(worldX, worldY);
      const path = findPath(startVec, targetVec, overworldLayer, removableLayer);
      this.link.moveAlong(path);
    });
    this.events.on(Phaser.Scenes.Events.SHUTDOWN, () => {
      this.input.off(Phaser.Input.Events.POINTER_UP);
    });
  }
  update(t, dt) {
    if (this.link) {
      this.link.update(this.cursors);
    }
  }
}

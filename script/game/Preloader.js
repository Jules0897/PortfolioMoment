import Phaser from "phaser";
export default class Preloader extends Phaser.Scene {
  constructor() {
    super("bootGame");
  }
  preload() {
    this.load.image("overworld_tiles", "../assets/world/tiles-overworld.png");
    this.load.tilemapTiledJSON("overworld_tilemap", "../assets/world/overworld.json");
    this.load.atlas("link", "../assets/sprites/link.png", "../assets/sprites/link.json");
  }
  create() {
    this.add.text(20, 20, "Loading...");
    this.scene.start("startGame");
  }
}

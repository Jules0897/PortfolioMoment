import Phaser from "../../_snowpack/pkg/phaser.js";
var pathfindWalk;
export default class Link extends Phaser.Physics.Arcade.Sprite {
  constructor(scene, x, y, texture, frame) {
    super(scene, x, y, texture, frame);
    this.movePath = [];
    this.anims.play("link-idle-down");
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
  update(cursors) {
    let dx = 0;
    let dy = 0;
    if (this.moveToTarget) {
      pathfindWalk = 1;
      console.log(pathfindWalk);
      dx = this.moveToTarget.x - this.x;
      dy = this.moveToTarget.y - this.y;
      if (Math.abs(dx) < 5) {
        dx = 0;
      }
      if (Math.abs(dy) < 5) {
        dy = 0;
      }
      if (dx === 0 && dy === 0) {
        if (this.movePath.length > 0) {
          this.moveTo(this.movePath.shift());
          return;
        }
        this.moveToTarget = void 0;
        pathfindWalk = 0;
        console.log(pathfindWalk);
      }
    }
    const leftDown = dx < 0;
    const rightDown = dx > 0;
    const upDown = dy < 0;
    const downDown = dy > 0;
    const speed = 83;
    if (cursors.left?.isDown || cursors.right?.isDown || cursors.up?.isDown || cursors.down?.isDown) {
      this.moveToTarget = void 0;
    }
    if (cursors.left?.isDown || leftDown) {
      this.anims.play("link-walk-left", true);
      this.setVelocity(-speed, 0);
    } else if (cursors.right?.isDown || rightDown) {
      this.anims.play("link-walk-right", true);
      this.setVelocity(speed, 0);
    } else if (cursors.up?.isDown || upDown) {
      this.anims.play("link-walk-up", true);
      this.setVelocity(0, -speed);
    } else if (cursors.down?.isDown || downDown) {
      this.anims.play("link-walk-down", true);
      this.setVelocity(0, speed);
    } else {
      const parts = this.anims.currentAnim.key.split("-");
      parts[1] = "idle";
      this.play(parts.join("-"));
      this.setVelocity(0, 0);
    }
  }
}
Phaser.GameObjects.GameObjectFactory.register("link", function(x, y, texture, frame) {
  var sprite = new Link(this.scene, x, y, texture, frame);
  this.displayList.add(sprite);
  this.updateList.add(sprite);
  this.scene.physics.world.enableBody(sprite, Phaser.Physics.Arcade.DYNAMIC_BODY);
  if (pathfindWalk == 1) {
    sprite.body.setSize(sprite.width * 0.6, sprite.height * 0.4);
    sprite.body.setOffset(sprite.width * 0.2, sprite.height * 0.5);
  } else {
    sprite.body.setSize(sprite.width * 0.6, sprite.height * 0.4);
    sprite.body.setOffset(sprite.width * 0.2, sprite.height * 0.4);
  }
  return sprite;
});

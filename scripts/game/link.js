"use strict";
//   User: J. Verbruggen
//   Date: 01/03/2023
//   File: link.ts
var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
require("phaser");
var pathfindWalk;
var Link = /** @class */ (function (_super) {
    __extends(Link, _super);
    function Link(scene, x, y, texture, frame) {
        var _this = _super.call(this, scene, x, y, texture, frame) || this;
        _this.movePath = [];
        _this.anims.play('link-idle-down');
        return _this;
    }
    Link.prototype.moveAlong = function (path) {
        if (!path || path.length <= 0) {
            return;
        }
        this.movePath = path;
        this.moveTo(this.movePath.shift());
    };
    Link.prototype.moveTo = function (target) {
        this.moveToTarget = target;
    };
    Link.prototype.update = function (cursors) {
        var _a, _b, _c, _d, _e, _f, _g, _h;
        var dx = 0;
        var dy = 0;
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
                this.moveToTarget = undefined;
                pathfindWalk = 0;
                console.log(pathfindWalk);
            }
        }
        // this logic is the same except we determine
        // if a key is down based on dx and dy
        var leftDown = dx < 0;
        var rightDown = dx > 0;
        var upDown = dy < 0;
        var downDown = dy > 0;
        var speed = 83;
        if (((_a = cursors.left) === null || _a === void 0 ? void 0 : _a.isDown) || ((_b = cursors.right) === null || _b === void 0 ? void 0 : _b.isDown) || ((_c = cursors.up) === null || _c === void 0 ? void 0 : _c.isDown) || ((_d = cursors.down) === null || _d === void 0 ? void 0 : _d.isDown)) {
            this.moveToTarget = undefined;
        }
        if (((_e = cursors.left) === null || _e === void 0 ? void 0 : _e.isDown) || leftDown) {
            this.anims.play('link-walk-left', true);
            this.setVelocity(-speed, 0);
        }
        else if (((_f = cursors.right) === null || _f === void 0 ? void 0 : _f.isDown) || rightDown) {
            this.anims.play('link-walk-right', true);
            this.setVelocity(speed, 0);
        }
        else if (((_g = cursors.up) === null || _g === void 0 ? void 0 : _g.isDown) || upDown) {
            this.anims.play('link-walk-up', true);
            this.setVelocity(0, -speed);
        }
        else if (((_h = cursors.down) === null || _h === void 0 ? void 0 : _h.isDown) || downDown) {
            this.anims.play('link-walk-down', true);
            this.setVelocity(0, speed);
        }
        else {
            var parts = this.anims.currentAnim.key.split('-');
            parts[1] = 'idle';
            this.play(parts.join('-'));
            this.setVelocity(0, 0);
        }
    };
    return Link;
}(Phaser.Physics.Arcade.Sprite));
exports.default = Link;
Phaser.GameObjects.GameObjectFactory.register('link', function (x, y, texture, frame) {
    var sprite = new Link(this.scene, x, y, texture, frame);
    this.displayList.add(sprite);
    this.updateList.add(sprite);
    this.scene.physics.world.enableBody(sprite, Phaser.Physics.Arcade.DYNAMIC_BODY);
    if (pathfindWalk == 1) {
        sprite.body.setSize(sprite.width * 0.6, sprite.height * 0.4);
        sprite.body.setOffset(sprite.width * 0.2, sprite.height * 0.5);
    }
    else {
        sprite.body.setSize(sprite.width * 0.6, sprite.height * 0.4);
        sprite.body.setOffset(sprite.width * 0.2, sprite.height * 0.4);
    }
    return sprite;
});

"use strict";
//   User: J. Verbruggen
//   Date: 28/02/2023
//   File: Game.ts
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
var findPath_1 = require("../src/findPath");
var linkAnims_1 = require("../src/linkAnims");
Promise.resolve().then(function () { return require('../src/link'); });
var Game = /** @class */ (function (_super) {
    __extends(Game, _super);
    function Game() {
        var _this = _super.call(this, "startGame") || this;
        _this.movePath = [];
        return _this;
    }
    Game.prototype.moveAlong = function (path) {
        if (!path || path.length <= 0) {
            return;
        }
        this.movePath = path;
        this.moveTo(this.movePath.shift());
    };
    Game.prototype.moveTo = function (target) {
        this.moveToTarget = target;
    };
    Game.prototype.preload = function () {
        this.cursors = this.input.keyboard.createCursorKeys();
    };
    Game.prototype.create = function () {
        var _this = this;
        (0, linkAnims_1.createLinkAnims)(this.anims);
        var debug = true;
        // create the overworld_tilemap
        var map = this.make.tilemap({ key: 'overworld_tilemap' });
        // add the tileset image we are using
        var tileset = map.addTilesetImage('overworld-tiles', 'overworld_tiles');
        // create the layers we want in the right order
        var overworldLayer = map.createLayer('overworld', tileset);
        // "walls" layer will be on top of "overworld" layer
        var wallsLayer = map.createLayer('walls', tileset);
        // "interactive" layer will be on top of "walls" layer
        var interactiveLayer = map.createLayer('interactive', tileset);
        // "removable" layer will be on top of "interactive" layer
        var removableLayer = map.createLayer('removable', tileset);
        // create collision
        overworldLayer.setCollisionByProperty({ collides: true });
        wallsLayer.setCollisionByProperty({ collides: true });
        removableLayer.setCollisionByProperty({ collides: true });
        // code for debug mode
        if (debug = false) {
            // shows collision
            var debugGraphics = this.add.graphics().setAlpha(0.5);
            overworldLayer.renderDebug(debugGraphics, {
                tileColor: null,
                collidingTileColor: new Phaser.Display.Color(108, 0, 255, 255),
                faceColor: new Phaser.Display.Color(40, 39, 37, 255) // Color of colliding face edges
            });
            wallsLayer.renderDebug(debugGraphics, {
                tileColor: null,
                collidingTileColor: new Phaser.Display.Color(108, 0, 255, 255),
                faceColor: new Phaser.Display.Color(40, 39, 37, 255) // Color of colliding face edges
            });
            removableLayer.renderDebug(debugGraphics, {
                tileColor: null,
                collidingTileColor: new Phaser.Display.Color(108, 0, 255, 255),
                faceColor: new Phaser.Display.Color(40, 39, 37, 255) // Color of colliding face edges
            });
        }
        // Link
        this.link = this.add.link(1912, 1312, 'link');
        this.physics.add.collider(this.link, overworldLayer);
        this.physics.add.collider(this.link, wallsLayer);
        this.physics.add.collider(this.link, removableLayer);
        this.cameras.main.startFollow(this.link, true);
        // Pathfinding
        this.input.on(Phaser.Input.Events.POINTER_UP, function (pointer) {
            // tslib error here
            var worldX = pointer.worldX, worldY = pointer.worldY;
            var startVec = overworldLayer.worldToTileXY(_this.link.x, _this.link.y);
            var targetVec = overworldLayer.worldToTileXY(worldX, worldY);
            // generate the path
            var path = (0, findPath_1.default)(startVec, targetVec, overworldLayer, removableLayer);
            // give it to the player to use
            // this.link.moveAlong(path)
        });
        // remember to clean up on Scene shutdown
        this.events.on(Phaser.Scenes.Events.SHUTDOWN, function () {
            _this.input.off(Phaser.Input.Events.POINTER_UP);
        });
    };
    Game.prototype.update = function (t, dt) {
        if (this.link) {
            this.link.update(this.cursors);
        }
    };
    return Game;
}(Phaser.Scene));
exports.default = Game;

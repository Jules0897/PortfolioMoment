"use strict";
//   User: J. Verbruggen
//   Date: 28/02/2023
//   File: Preloader.ts
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
var Preloader = /** @class */ (function (_super) {
    __extends(Preloader, _super);
    function Preloader() {
        return _super.call(this, "bootGame") || this;
    }
    // Loads assets into memory
    Preloader.prototype.preload = function () {
        // load the PNG file
        this.load.image('overworld_tiles', '../assets/world/tiles-overworld.png');
        // load the JSON file
        this.load.tilemapTiledJSON('overworld_tilemap', '../assets/world/overworld.json');
        // Load Link
        this.load.atlas('link', '../assets/sprites/link.png', '../assets/sprites/link.json');
    };
    // Starts Preloader
    Preloader.prototype.create = function () {
        this.add.text(20, 20, "Loading...");
        this.scene.start("startGame");
    };
    return Preloader;
}(Phaser.Scene));
exports.default = Preloader;

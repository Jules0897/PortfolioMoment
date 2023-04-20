import Phaser from "phaser";
import Preloader from "./Preloader.js";
import Game from "./Game.js";
export default new Phaser.Game({
  type: Phaser.AUTO,
  parent: "game",
  physics: {
    default: "arcade",
    arcade: {
      gravity: {y: 0},
      debug: false,
      fps: 60
    }
  },
  scene: [Preloader, Game],
  scale: {
    mode: Phaser.Scale.FIT,
    parent: "game",
    autoCenter: Phaser.Scale.CENTER_BOTH,
    width: 256,
    height: 176,
    zoom: 10
  },
  pixelArt: true
});

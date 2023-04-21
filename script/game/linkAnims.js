const createLinkAnims = (anims) => {
  anims.create({
    key: "link-idle-down",
    frames: [{key: "link", frame: "link-walk-down-1.png"}]
  });
  anims.create({
    key: "link-idle-up",
    frames: [{key: "link", frame: "link-walk-up-1.png"}]
  });
  anims.create({
    key: "link-idle-left",
    frames: [{key: "link", frame: "link-walk-left-1.png"}]
  });
  anims.create({
    key: "link-idle-right",
    frames: [{key: "link", frame: "link-walk-right-1.png"}]
  });
  anims.create({
    key: "link-walk-down",
    frames: anims.generateFrameNames("link", {start: 1, end: 2, prefix: "link-walk-down-", suffix: ".png"}),
    repeat: -1,
    frameRate: 12
  });
  anims.create({
    key: "link-walk-up",
    frames: anims.generateFrameNames("link", {start: 1, end: 2, prefix: "link-walk-up-", suffix: ".png"}),
    repeat: -1,
    frameRate: 12
  });
  anims.create({
    key: "link-walk-left",
    frames: anims.generateFrameNames("link", {start: 1, end: 2, prefix: "link-walk-left-", suffix: ".png"}),
    repeat: -1,
    frameRate: 12
  });
  anims.create({
    key: "link-walk-right",
    frames: anims.generateFrameNames("link", {start: 1, end: 2, prefix: "link-walk-right-", suffix: ".png"}),
    repeat: -1,
    frameRate: 12
  });
};
export {
  createLinkAnims
};

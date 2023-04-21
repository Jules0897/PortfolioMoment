const toKey = (x, y) => `${x}x${y}`;
const findPath = (start, target, wallsLayer, removableLayer) => {
  if (!wallsLayer.getTileAt(target.x, target.y)) {
    return [];
  }
  if (removableLayer.getTileAt(target.x, target.y)) {
    return [];
  }
  const queue = [];
  const parentForKey = {};
  const startKey = toKey(start.x, start.y);
  const targetKey = toKey(target.x, target.y);
  parentForKey[startKey] = {
    key: "",
    position: {x: -1, y: -1}
  };
  queue.push(start);
  while (queue.length > 0) {
    const {x, y} = queue.shift();
    const currentKey2 = toKey(x, y);
    if (currentKey2 === targetKey) {
      break;
    }
    const neighbors = [
      {x, y: y - 1},
      {x: x + 1, y},
      {x, y: y + 1},
      {x: x - 1, y}
    ];
    for (let i = 0; i < neighbors.length; ++i) {
      const neighbor = neighbors[i];
      const tile = wallsLayer.getTileAt(neighbor.x, neighbor.y);
      if (!tile) {
        continue;
      }
      if (removableLayer.getTileAt(neighbor.x, neighbor.y)) {
        continue;
      }
      const key = toKey(neighbor.x, neighbor.y);
      if (key in parentForKey) {
        continue;
      }
      parentForKey[key] = {
        key: currentKey2,
        position: {x, y}
      };
      queue.push(neighbor);
    }
  }
  const path = [];
  let currentKey = targetKey;
  let currentPos = parentForKey[targetKey].position;
  while (currentKey !== startKey) {
    const pos = wallsLayer.tileToWorldXY(currentPos.x, currentPos.y);
    pos.x += wallsLayer.tilemap.tileWidth * 0.5;
    pos.y += wallsLayer.tilemap.tileHeight;
    path.push(pos);
    const {key, position} = parentForKey[currentKey];
    currentKey = key;
    currentPos = position;
  }
  return path.reverse();
};
export default findPath;

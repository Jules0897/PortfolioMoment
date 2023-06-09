"use strict";
//   User: J. Verbruggen
//   Date: 04/03/2023
//   File: findPath.ts
Object.defineProperty(exports, "__esModule", { value: true });
require("phaser");
var toKey = function (x, y) { return "".concat(x, "x").concat(y); };
var findPath = function (start, target, wallsLayer, removableLayer) {
    // no path if select invalid tile
    if (!wallsLayer.getTileAt(target.x, target.y)) {
        return [];
    }
    // no path if select a wall
    if (removableLayer.getTileAt(target.x, target.y)) {
        return [];
    }
    var queue = [];
    var parentForKey = {};
    var startKey = toKey(start.x, start.y);
    var targetKey = toKey(target.x, target.y);
    parentForKey[startKey] = {
        key: '',
        position: { x: -1, y: -1 }
    };
    queue.push(start);
    while (queue.length > 0) {
        var _a = queue.shift(), x = _a.x, y = _a.y;
        var currentKey_1 = toKey(x, y);
        if (currentKey_1 === targetKey) {
            break;
        }
        var neighbors = [
            { x: x, y: y - 1 },
            { x: x + 1, y: y },
            { x: x, y: y + 1 },
            { x: x - 1, y: y } // left
        ];
        for (var i = 0; i < neighbors.length; ++i) {
            var neighbor = neighbors[i];
            var tile = wallsLayer.getTileAt(neighbor.x, neighbor.y);
            if (!tile) {
                continue;
            }
            if (removableLayer.getTileAt(neighbor.x, neighbor.y)) {
                continue;
            }
            var key = toKey(neighbor.x, neighbor.y);
            if (key in parentForKey) {
                continue;
            }
            parentForKey[key] = {
                key: currentKey_1,
                position: { x: x, y: y }
            };
            queue.push(neighbor);
        }
    }
    var path = [];
    var currentKey = targetKey;
    var currentPos = parentForKey[targetKey].position;
    while (currentKey !== startKey) {
        var pos = wallsLayer.tileToWorldXY(currentPos.x, currentPos.y);
        pos.x += wallsLayer.tilemap.tileWidth * 0.5;
        pos.y += wallsLayer.tilemap.tileHeight;
        // console.log('X: '+pos.x/16+',Y: '+pos.y/16)
        path.push(pos);
        var _b = parentForKey[currentKey], key = _b.key, position = _b.position;
        currentKey = key;
        currentPos = position;
    }
    return path.reverse();
};
exports.default = findPath;

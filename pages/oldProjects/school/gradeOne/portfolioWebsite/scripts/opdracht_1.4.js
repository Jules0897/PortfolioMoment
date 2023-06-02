//maakt een variable voor de pages aan
var pages =["Back", "Nintendo", "Smash", "kw1c", "Youtube", "Minecraft", "Discord"];
//maakt van de variable id's en stuurt deze naar de HTML
document.getElementById("back").innerHTML = "<a href=https://www.youtube.com/watch?v=dQw4w9WgXcQ>" + pages[0] + "</a>"

document.getElementById("page1").innerHTML = "<a href=https://www.nintendo.com/> <li>" + pages[1] + "</li> </a>"

document.getElementById("page2").innerHTML = "<a href=https://www.smashbros.com/> <li>" + pages[2] + "</li> </a>"

document.getElementById("page3").innerHTML = "<a href=https://www.kw1c.nl/> <li>" + pages[3] + "</li> </a>"

document.getElementById("page4").innerHTML = "<a href=https://www.youtube.com/> <li>" + pages[4] + "</li> </a>"

document.getElementById("page5").innerHTML = "<a href=https://www.minecraft.net/nl-nl> <li>" + pages[5] + "</li> </a>"

document.getElementById("page6").innerHTML = "<a href=https://discord.com/> <li>" + pages[6] + "</li> </a>"
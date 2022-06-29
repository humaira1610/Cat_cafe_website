var quoteList=["“Time spent with cats is never wasted.” – Sigmund Freud",
"“Cats choose us; we don’t own them.” – Kristin Cast",
"“Those who’ll play with cats must expect to be scratched.—Miguel de Cervantes”",
"“Cats know how to obtain food without labor, shelter without confinement, and love without penalties.”—Walter Lionel George",
"“Cats are connoisseurs of comfort.”—James Herriot",
"“Cats do not have to be shown how to have a good time, for they are unfailing ingenious in that respect.”—James Mason",
"“I regard cats as one of the great joys in the world. I see them as a gift of highest order.”—Trisha McCagh",
"“If a dog jumps into your lap it is because he is fond of you; but if a cat does the same thing it is because your lap is warmer.”—A.N. Whitehead",
"“There are few things in life more heartwarming than to be welcomed by a cat.” - Tay Hohoff",
"“You will always be lucky if you know how to make friends with strange cats.” - Colonial American proverb",
"“A cat will be your friend, but never your slave.” -Theophile Gautier",
"“As every cat owner knows, nobody owns a cat.” -Ellen Perry Berkeley"]


function quoteGenerator(){
    var randomNumber = Math.floor(Math.random()*(quoteList.length));
    document.getElementById('quotes').innerHTML=quoteList[randomNumber];
}
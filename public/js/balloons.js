function globos() {
    const density = 30; // concurrent balloon count
    const balloons = [];
    const colors = ['yellow', 'green', 'blue', 'red'];

    const stringElement = document.createElement("div");
    stringElement.classList.add("string");

    for (let i = 0; i < density; i++) {
        const element = document.createElement("div");
        element.classList.add("balloon");
        element.classList.add(randomColor());

        element.append(stringElement.cloneNode());
        document.body.append(element);

        setTimeout(() => {
            releaseBalloon(element);
        }, (i * 50) + random(5, 10));
    }


    function randomColor() {
        return colors[random(0, colors.length)];
    }

    function random(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }

    function releaseBalloon(balloon) {
        const delay = random(50, 100);
        const x = random(-99, -30); // random x value to fly
        const y = random(-99, -30); // random y value to fly

        const sequence = [{
            offset: 0,
            transform: `rotateZ(45deg) translate(0, 0)`
        }];


        // random fly direction
        if (random(0, 2) === 0) {
            // first fly up to top left

            // left distance to keep balloon in view
            balloon.style.left = `${-1*x}vw`;

            sequence.push({
                offset: x / -200,
                transform: `rotateZ(45deg) translate(${x}vw, 0)`
            });
            sequence.push({
                offset: (x + y) / -200,
                transform: `rotateZ(45deg) translate(${x}vw, ${y}vh)`
            });
            sequence.push({
                offset: (-100 + y) / -200,
                transform: `rotateZ(45deg) translate(-100vw, ${y}vh)`
            });
        } else {
            // fist fly up to right top

            sequence.push({
                offset: y / -200,
                transform: `rotateZ(45deg) translate(0, ${y}vh)`
            });
            sequence.push({
                offset: (x + y) / -200,
                transform: `rotateZ(45deg) translate(${x}vw, ${y}vh)`
            });
            sequence.push({
                offset: (-100 + x) / -200,
                transform: `rotateZ(45deg) translate(${x}vw, -100vh)`
            });
        }

        // last move is common
        sequence.push({
            offset: 1,
            transform: `rotateZ(45deg) translate(-100vw, -100vh)`
        });

        const balloonAnimation = balloon.animate(sequence, {
            duration: 5000
        });
    }
};

function emojis() {
    const density = 30; // concurrent balloon count

    const rightEye = document.createElement("div");
    rightEye.classList.add("reye");
    const leftEye = document.createElement("div");
    leftEye.classList.add("leye");
    const gota = document.createElement("div");
    gota.classList.add("gota");
    const boca = document.createElement("div");
    boca.classList.add("boca");

    for (let i = 0; i < density; i++) {
        const element = document.createElement("div");
        element.classList.add("emoji");

        element.append(rightEye.cloneNode());
        element.append(leftEye.cloneNode());
        element.append(gota.cloneNode());
        element.append(boca.cloneNode());
        document.body.append(element);

        setTimeout(() => {
            releaseEmoji(element);
        }, (i * 50) + random(5, 10));
    }

    function random(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }

    function releaseEmoji(emoji) {
        const x = random(-99, -30); // random x value to fly
        const y = random(-99, -30); // random y value to fly

        const sequence = [{
            offset: 0,
            transform: `rotateZ(45deg) translate(0, 0)`
        }];


        // random fly direction
        if (random(0, 1) === 0) {
            // first fly up to top left

            // left distance to keep emoji in view
            emoji.style.left = `${-1*x}vw`;

            sequence.push({
                offset: x / -200,
                transform: `rotateZ(45deg) translate(${x}vw, 0)`
            });
            sequence.push({
                offset: (x + y) / -200,
                transform: `rotateZ(45deg) translate(${x}vw, ${y}vh)`
            });
            sequence.push({
                offset: (-100 + y) / -200,
                transform: `rotateZ(45deg) translate(-100vw, ${y}vh)`
            });
        } else {
            // fist fly up to right top

            sequence.push({
                offset: y / -200,
                transform: `rotateZ(45deg) translate(0, ${y}vh)`
            });
            sequence.push({
                offset: (x + y) / -200,
                transform: `rotateZ(45deg) translate(${x}vw, ${y}vh)`
            });
            sequence.push({
                offset: (-100 + x) / -200,
                transform: `rotateZ(45deg) translate(${x}vw, -100vh)`
            });
        }

        // last move is common
        sequence.push({
            offset: 1,
            transform: `rotateZ(45deg) translate(-100vw, -100vh)`
        });

        const emojiAnimation = emoji.animate(sequence, {
            duration: 5000
        });
    }
};
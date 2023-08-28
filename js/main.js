// Text Animation
const aniText = document.querySelector(".ani-text");

const animateText = (text) => {
    aniText.textContent = ""; // Clear the text
    let index = 0;

    const typingInterval = setInterval(() => {
        if (index < text.length) {
            aniText.textContent += text.charAt(index);
            index++;
        } else {
            clearInterval(typingInterval); // Stop the interval when text is fully typed
        }
    }, 100); // Interval time for typing each character
};

const aniTextFunc = () => {
    setTimeout(() => {
        animateText("Scholarship");
    }, 0);
    setTimeout(() => {
        animateText("Learn");
    }, 4000);
    setTimeout(() => {
        animateText("Grow");
    }, 8000);
};

aniTextFunc();
setInterval(aniTextFunc, 12000);

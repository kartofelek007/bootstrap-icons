import copyTextToClipboard from "./clipboard.js";

const list = document.querySelector(".icon-list");
let iconsArr = [];

function copyAlert() {
    const div = document.createElement("div");
    div.classList.add("copied");
    div.innerText = "Copied do clipboard";
    document.body.append(div);
    setTimeout(e => {
        div.remove();
    }, 800);
}

function bindEventToIcons() {
    const elements = document.querySelectorAll(".icon-el");
    elements.forEach(el => {
        el.onclick = () => {
            const anim = el.animate([
                { transform: `scale(1)`, boxShadow: `inset 0 0 0 2px black` },
                { transform: `scale(1.2)`, boxShadow: `inset 0 0 0 4px black` },
                { transform: `scale(1)`, boxShadow: `inset 0 0 0 2px black` },
            ], {
                duration: 300,
                iterations: 1
            })
            anim.onfinish = e => {
                copyTextToClipboard(el.querySelector(".icon-img").innerHTML.trim());
                copyAlert();
            }
        }
    });
}

function bindButtons() {
    function debounced(delay, fn) {
        let timerId;
        return function(...args) {
            if (timerId) {
                clearTimeout(timerId);
            }
            timerId = setTimeout(() => {
                fn(...args);
                timerId = null;
            }, delay);
        }
    }

    function filterIcons() {
        const val = input.value;
        const elements = document.querySelectorAll(".icon-el");
        [...elements].forEach(div => {
            const name = div.querySelector(".icon-name").innerHTML;
            div.hidden = !name.includes(val);
        });
    }

    const tHandler = debounced(200, filterIcons);
    const input = document.querySelector("#inputFilter");
    input.oninput = tHandler;
    input.disabled = false;

    let smallLayout = false;
    if (localStorage.getItem("smallLayout") === "true") {
        smallLayout = true;
    }

    function setLayout() {
        document.body.classList.toggle("small-layout", smallLayout);
        localStorage.setItem("smallLayout", smallLayout);
    }

    document.querySelector("#toggleNames").onclick = e => {
        smallLayout = !smallLayout;
        setLayout();
    }

    setLayout();
}

const header = document.querySelector(".header");
function stickyHeader() {
    window.onscroll = e => {
        header.classList.toggle("is-sticky", window.scrollY > 0);
    }
    header.classList.toggle("is-sticky", window.scrollY > 0);
}

function initApp() {
    bindButtons();
    bindEventToIcons();
}

stickyHeader();
initApp();
import copyTextToClipboard from "./clipboard";
import {ColorPicker} from "./colorpicker/colorpicker";

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
    const elements = document.querySelectorAll(".icon");
    elements.forEach(el => {
        el.querySelector(".icon-content").addEventListener("click", () => {
            el.style.zIndex = 1000000;
            const anim = el.animate([
                {transform: `scale(1)`, boxShadow: `inset 0 0 0 2px black`},
                {transform: `scale(1.2)`, boxShadow: `inset 0 0 0 4px black`},
                {transform: `scale(1)`, boxShadow: `inset 0 0 0 2px black`},
            ], {
                duration: 300,
                iterations: 1
            })
            anim.onfinish = e => {
                el.style.zIndex = "";
                copyTextToClipboard(el.querySelector(".icon-img").innerHTML.trim());
                copyAlert();
            }
        });

        el.querySelector(".icon-checkbox").addEventListener("click", e => {
            e.stopPropagation();

            const item = localStorage.getItem("favorites");
            let favorites = [];
            if (item) {
                favorites = JSON.parse(item);
            }
            const name = el.dataset.name;
            const set = new Set(favorites);

            if (e.target.checked) {
                set.add(name);
            } else {
                set.delete(name);
            }

            localStorage.setItem("favorites", JSON.stringify([...set]));

            enableDisableFavoriteBtn();
            //automatycznie usuwa ikonke jak jest widok favorite
            // if (!e.target.checked) {
            //     showFavorites();
            // }
        })

        el.querySelector(".icon-css").addEventListener("click", e => {
            e.preventDefault();
            e.stopPropagation();
            let data = e.target.closest(".icon").querySelector(".icon-img svg").outerHTML.trim();
            data = data.replaceAll(`"`, `'`);
            data = data.replaceAll(">", "%3E");
            data = data.replaceAll("<", "%3C");
            data = data.replaceAll("#", "%23");
            data = data.replace(/(?:\r\n|\r|\n)/g, '');
            let text = `background-image: url("data:image/svg+xml,${data}");`;
            copyTextToClipboard(text);
            copyAlert();
        })

        el.querySelector(".icon-download").addEventListener("click", e => {
            e.stopPropagation();
            e.preventDefault();
            const a = document.createElement('a');
            const svgCode = el.querySelector(".icon-img svg").outerHTML.trim();

            a.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(svgCode));
            a.setAttribute('download', el.dataset.name);

            a.style.display = 'none';
            document.body.appendChild(a);

            a.click();

            document.body.removeChild(a);
        })
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
        const elements = document.querySelectorAll(".icon");
        [...elements].forEach(div => {
            const name = div.dataset.name;
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

    document.querySelector("#favorite").onclick = e => {
        e.currentTarget.classList.toggle("is-active");
        if (e.currentTarget.classList.contains("is-active")) {
            showFavorites();
        } else {
            const ev = new Event("input");
            input.dispatchEvent(ev);
        }
    }

    setLayout();
}

function showFavorites() {
    const elements = document.querySelectorAll(".icon");
    const item = localStorage.getItem("favorites");
    if (item) {
        const arr = JSON.parse(item);
        if (arr.length) {
            [...elements].forEach(div => {
                const name = div.dataset.name;
                div.hidden = !arr.includes(name);
            });
        }
    }
}

function setFavoriteCheckbox() {
    const elements = document.querySelectorAll(".icon");
    const item = localStorage.getItem("favorites");
    if (item) {
        const arr = JSON.parse(item);
        if (arr.length) {
            [...elements].forEach(div => {
                const name = div.dataset.name;
                div.querySelector(".icon-checkbox").checked = arr.includes(name);
            });
        }
    }
}

function stickyHeader() {
    const header = document.querySelector(".header");
    window.onscroll = e => {
        header.classList.toggle("is-sticky", window.scrollY > 0);
    }
    header.classList.toggle("is-sticky", window.scrollY > 0);
}

function enableDisableFavoriteBtn() {
    const btn = document.querySelector("#favorite");
    btn.disabled = true;
    const item = localStorage.getItem("favorites");
    if (item) {
        const arr = JSON.parse(item);
        if (arr.length) {
            btn.disabled = false;
        }
    }
}

function initColorPicker() {
    var parent = document.querySelector('#colorPickerInside div');

    const cp = new ColorPicker(parent, {
        initColor: "#ff00ff",
        showLibrary: true,
        showButtonOK: true,
        dynamic: false,
        libraryID: "myColors"
    });

    cp.onButtonClick.on(color => {
        const elements = [...document.querySelectorAll(".icon")];

        const colorize = () => {
            if (elements.length) {
                let arr = elements.splice(0, 100);
                for (let el of arr) {
                    const svg = el.querySelector(".icon-img svg");
                    const svgOriginal = el.querySelector(".icon-img-original svg");
                    svg.outerHTML = svgOriginal.outerHTML.replaceAll('currentColor', color.slice(0, 7));
                }
                setTimeout(() => colorize(), 0);
            }
        }

        colorize();
    })

    document.querySelector("#colorPicker").addEventListener("click", e => {
        e.stopPropagation();
        e.currentTarget.classList.toggle("is-active");
    })

    document.querySelector("#colorPickerInside").addEventListener("click", e => {
        e.stopPropagation();
    })

    document.addEventListener("click", e => {
        document.querySelector("#colorPicker").classList.remove("is-active");
    })
}

function popupHelp() {
    const popup = document.querySelector(".popup");
    const close = document.querySelector(".popup-close");
    const toggle = document.querySelector(".btn-help");

    toggle.addEventListener("click", e => {
        document.body.classList.add("popup-show");
        popup.classList.add("is-show");
    })

    close.addEventListener("click", e => {
        document.body.classList.remove("popup-show");
        popup.classList.remove("is-show");
    })

    document.addEventListener("keyup", e => {
        if (e.key === "Escape") {
            close.click();
        }
    })
}

function initApp() {
    initColorPicker();
    stickyHeader();
    setFavoriteCheckbox();
    bindButtons();
    bindEventToIcons();
    enableDisableFavoriteBtn();
    popupHelp();
}

initApp();
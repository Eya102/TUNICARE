body {
    font-family: 'Montserrat', sans-serif;
    text-align: center;
}

#slider {
    width: 1200px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
}

#slide1, #slide2, #slide3, #slide4 {
    position: absolute;
    top: 0;
    left: 0;
}

#slide2, #slide3, #slide4 {
    display: none;
}

#precedent, #suivant {
    z-index: 1;
    transition: opacity 0.5s ease;
    font-size: 75px;
    font-weight: 100;
    position: absolute;
    top: 160px;
    background-color: rgba(0, 0, 0, 0.6);
    color: rgb(220, 220, 220, 0.6);
    opacity: 0;
    cursor: pointer;
}

#precedent {
    left: 0;
}

#suivant {
    right: 0;
}

#slider:hover #precedent, #slider:hover #suivant {
    opacity: 1;
}
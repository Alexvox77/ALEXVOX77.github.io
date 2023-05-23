document.addEventListener('DOMContentLoaded', () => {

    const generateRandomNumber = (min, max) => {
        const userCounter = document.getElementById('counter')

        let randomNumber = Math.floor(Math.random() * (max - min) + min)
        userCounter.innerHTML = randomNumber

        setInterval(() => {
            userCounter.innerHTML = randomNumber++
        }, 3000)

    }

    generateRandomNumber(100, 300)
})
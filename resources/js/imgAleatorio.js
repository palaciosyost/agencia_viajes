const d = document;

const imgAleatorio = () => {
    const $div = d.querySelector('.img-content')

    setInterval(() => {
        let random = Math.round(Math.random()*(7 - 1) + 1)
        console.log(random)
        $div.innerHTML= (`<img style="width: 100%;filter: contrast(130%); height: 100%; border-radius: 20px;" src="../resources/img/img${random}.jpg" alt="img paisajes">`)
    }, 3500);


}
imgAleatorio()



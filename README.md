<h1 align="center">

    PHP Iscrizione Newsletter

</h1>
<!-- <h1 align="center">
</h1> 
-->

<h4 align="center">First approach with  <a href="https://it.wikipedia.org/wiki/PHP" target="_blank">PHP</a></h4>

<!-- <p align="center">
  <a href="https://badge.fury.io/js/electron-markdownify">
    <img src="https://badge.fury.io/js/electron-markdownify.svg"
         alt="Gitter">
  </a>
  <a href="https://gitter.im/amitmerchant1990/electron-markdownify"><img src="https://badges.gitter.im/amitmerchant1990/electron-markdownify.svg"></a>
  <a href="https://saythanks.io/to/bullredeyes@gmail.com">
      <img src="https://img.shields.io/badge/SayThanks.io-%E2%98%BC-1EAEDB.svg">
  </a>
  <a href="https://www.paypal.me/AmitMerchant">
    <img src="https://img.shields.io/badge/$-donate-ff69b4.svg?maxAge=2592000&amp;style=flat">
  </a>
</p> -->

<p align="center">
  <a href="#description">Description</a> •
  <a href="#how-to-use">How To Use</a> •
  <a href="#used-technologies">Used technologies</a>
</p>

<!-- <div align="center">
    <img src="./public/img/images/avada-music-logo.png">
</div> -->

## Description

Creare una pagina index.php con un form (che richiama la stessa pagina) per l'inserimento di un indirizzo email.
Controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.
Usare un alert di Bootstrap (il componente HTML/CSS, non alert JS) per mostrare il messaggio di:

- successo: la mail contiene un punto e una chiocciola;
- errore: la mail NON contiene un punto e una chiocciola;

#### Milestone 1

Logica tutta dentro index.php, mostrare il messaggio di successo/errore dentro un alert di Bootstrap;

#### Milestone 2

Spostare la logica dentro functions.php (include);

### BONUS:

#### Milestone 3

invece di usare una classe statica per lo stile dell’alert, modificarla in base all’esito della funzione.

#### Milestone 4

invece di visualizzare il messaggio di success nella index.php, in caso di esito positivo effettuare un redirect ad una thankyou page
dove usiamo la session per mostrare anche l'indirizzo email con cui ci siamo "registrati"

## How To Use

To clone and run this application, you'll need [Git](https://git-scm.com) and [Node.js](https://nodejs.org/en/download/) (which comes with [npm](http://npmjs.com)) installed on your computer. From your command line:

```bash
# Clone this repository
 git clone ('link of the repository')

# Go into the repository
 cd ('file name')

# Install dependencies
 npm install

# Run the app
 npm run dev
```

## Used technologies

This software uses the following technologies:

- [PHP](https://it.wikipedia.org/wiki/PHP)

> GitHub [@JohnQuimson](https://github.com/JohnQuimson) &nbsp;&middot;&nbsp;
> Twitter [@John Henric Quimson](https://www.linkedin.com/in/john-henric-quimson-973827280/)

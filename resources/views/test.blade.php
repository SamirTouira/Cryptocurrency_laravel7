<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ajax</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css">
    <style>
        .modal {
            opacity: 0;
            visibility: hidden;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            text-align: left;
            background: rgba(0,0,0, .9);
            transition: opacity .25s ease;
        }
        .modal__bg {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            cursor: pointer;
        }
        .modal-state {
            display: none;
        }
        .modal-state:checked + .modal {
            opacity: 1;
            visibility: visible;
        }
        .modal-state:checked + .modal .modal__inner {
            top: 0;
        }
        .modal__inner {
            transition: top .25s ease;
            position: absolute;
            top: -20%;
            right: 0;
            bottom: 0;
            left: 0;
            width: 50%;
            margin: auto;
            overflow: auto;
            background: #fff;
            border-radius: 5px;
            padding: 1em 2em;
            height: 40%;
        }
        .modal__close {
            position: absolute;
            right: 1em;
            top: 1em;
            width: 1.1em;
            height: 1.1em;
            cursor: pointer;
        }
        .modal__close:after,
        .modal__close:before {
            content: '';
            position: absolute;
            width: 2px;
            height: 1.5em;
            background: #ccc;
            display: block;
            transform: rotate(45deg);
            left: 50%;
            margin: -3px 0 0 -1px;
            top: 0;
        }
        .modal__close:hover:after,
        .modal__close:hover:before {
            background: #aaa;
        }
        .modal__close:before {
            transform: rotate(-45deg);
        }
        body {
            padding: 1%;
            font: 1/1.5em sans-serif;
            text-align: center;
        }
        .button-success {
            color: white;
            border-radius: 4px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
            background: rgb(28, 184, 65);
        }
        .button-right {
            float: right;
        }
        input, textarea {
            width: 100% !important;
        }
        .pure-form-message {
            color: red;
        }
        .input-invalid {
            border-color: red !important;
        }
        .alert {
            padding: 20px;
            background-color: green;
            color: white;
            margin-top: 30px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Ajax avec Laravel</h1>
    <p><label id="open" class="pure-button button-success" for="modal">Ouvrir la page de contact</label></p>
    <input class="modal-state" id="modal" type="checkbox">
    <div class="modal">
      <label class="modal__bg" for="modal"></label>
      <div class="modal__inner">
        <label class="modal__close" for="modal"></label>
        <div class="alert" style="display: none">
            Votre message nous est bien parvenu, merci !
        </div>
        <form class="pure-form pure-form-stacked" id="maform" method="post" action="{{ route('message') }}">
            <fieldset>
                <legend>Laissez-nous un message</legend>
                <label for="email">Email</label>
                <input id="email" name="email" placeholder="Votre Email">
                <span class="pure-form-message"></span>
                <br>
                <label for="email">Message</label>
                <textarea id="message" name="message" class="pure-input-1-2" placeholder="Votre message"></textarea>
                <span class="pure-form-message"></span>
                <br>
                <button type="submit" class="pure-button button-success button-right">Envoyer</button>
            </fieldset>
        </form>
      </div>
    </div>
</body>
</html>
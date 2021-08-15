<div center class="titulo">Integração CSS</div>


<h1 center>
    <?php
    echo 'Olá Mundo';
    ?>
</h1>

<?= "<div dobro center azul>Outra forma de me 'expressar'!</div>";?>

<br>
<div center><button dobro><?= "Legal" ?></button></div>

<style>
    button {
        padding:5px 20px;
        background-color: #DB7093;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px
    }

    [center] {
        display: flex;
        justify-content: center;        
    }
    [azul] {
        color: #DB7093;
    }
    [dobro] {
        font-size:2rem;
    }
    </style>


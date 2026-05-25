<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:
    radial-gradient(circle at top left, #ff00ff, transparent 30%),
    radial-gradient(circle at bottom right, #00ffff, transparent 30%),
    linear-gradient(135deg, #0f0c29, #302b63, #24243e);
    overflow:hidden;
}

/* partículas gigantes no fundo */
body::before,
body::after{
    content:"";
    position:absolute;
    width:600px;
    height:600px;
    border-radius:50%;
    filter:blur(120px);
    opacity:0.4;
    animation: flutuar 8s infinite alternate;
}

body::before{
    background:#ff00ff;
    top:-200px;
    left:-200px;
}

body::after{
    background:#00ffff;
    bottom:-200px;
    right:-200px;
}

.card{
    position:relative;
    width:500px;
    padding:50px;
    border-radius:30px;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(20px);
    border:2px solid rgba(255,255,255,0.2);
    box-shadow:
    0 0 30px rgba(255,0,255,0.6),
    0 0 60px rgba(0,255,255,0.5),
    inset 0 0 20px rgba(255,255,255,0.1);
    text-align:center;
    animation: entrada 1s ease;
}

h1{
    color:white;
    font-size:42px;
    margin-bottom:35px;
    text-shadow:
    0 0 10px #fff,
    0 0 20px #ff00ff,
    0 0 40px #00ffff;
}

.info{
    margin:25px 0;
    padding:20px;
    border-radius:20px;
    background:rgba(255,255,255,0.1);
    border:1px solid rgba(255,255,255,0.2);
    transition:0.4s;
}

.info:hover{
    transform:scale(1.05) rotate(-1deg);
    box-shadow:
    0 0 20px #ff00ff,
    0 0 40px #00ffff;
}

.label{
    display:block;
    color:#00ffff;
    font-size:20px;
    margin-bottom:10px;
    text-transform:uppercase;
    letter-spacing:3px;
}

.valor{
    color:white;
    font-size:28px;
    font-weight:bold;
    text-shadow:0 0 10px rgba(255,255,255,0.8);
    word-break:break-word;
}

@keyframes entrada{
    from{
        opacity:0;
        transform:translateY(40px) scale(0.8);
    }

    to{
        opacity:1;
        transform:translateY(0) scale(1);
    }
}

@keyframes flutuar{
    from{
        transform:translateY(0) translateX(0);
    }

    to{
        transform:translateY(40px) translateX(40px);
    }
}

</style>

</head>
<body>

<div class="card">

    <h1>ÁREA DADOS</h1>

    <div class="info">
        <span class="label">Nome</span>
        <span class="valor">
            <?php echo $_SESSION["nome"]; ?>
        </span>
    </div>

    <div class="info">
        <span class="label">Senha</span>
        <span class="valor">
            <?php echo $_SESSION["senha"]; ?>
        </span>
    </div>

</div>

</body>
</html>
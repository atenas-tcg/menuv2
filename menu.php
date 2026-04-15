<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fondo con tabs</title>

<style>
:root{
  --purple-dark:#2a0047;
  --purple:#5f0aa8;
  --nav-bg:#f5f4f7;
  --text-light:#ffffff;
  --text:#2f2b47;
}

*{box-sizing:border-box;margin:0;padding:0}

body{
  font-family:Inter,system-ui,sans-serif;
  background:transparent;
}

.wrapper{
  width:100%;
}

.topbar{
  height:72px;
  width:100%;
  background:var(--purple-dark);
  display:flex;
  align-items:flex-end;
}

.top-tabs{
  display:flex;
  margin-left:346px;
  height:72px;
}

.top-tab{
  min-width:140px;
  padding:0 18px;
  display:flex;
  align-items:center;
  justify-content:center;
  color:var(--text-light);
  text-decoration:none;
  font-size:15px;
  cursor:pointer;
  background:transparent;
  border:0;
  height:72px;
  transition:.2s ease;
}

.top-tab.active{
  background:var(--nav-bg);
  color:var(--text);
  font-weight:700;
}

.navbar{
  height:92px;
  width:100%;
  background:var(--nav-bg);
  position:relative;
}

.logo-zone{
  width:346px;
  height:92px;
  position:relative;
}

.logo-blank{
  width:216px;
  height:92px;
  background:#fff;
}

.logo-box{
  width:130px;
  height:130px;
  position:absolute;
  right:0;
  top:-19px;
  display:flex;
  justify-content:center;
}

.estandarte{
  width:120px;
  height:170px;
  background:linear-gradient(180deg,#5f0aa8,#6a5cff);
  border-radius:6px 6px 60px 60px;
  box-shadow:0 10px 30px rgba(0,0,0,.25);
  border:2px solid #4c2cff;

  display:flex;
  align-items:center;
  justify-content:center;
}

.icono{
  width:60px;
  height:60px;
  object-fit:contain;
}
</style>
</head>

<body>
<div class="wrapper">
  <div class="topbar">
    <div class="top-tabs">
      <button class="top-tab active">Pokémon</button>
      <button class="top-tab">Mitos y Leyendas</button>
      <button class="top-tab">MYL</button>
    </div>
  </div>

  <div class="navbar">
    <div class="logo-zone">
      <div class="logo-blank"></div>
        <div class="logo-box">
            <div class="estandarte">
                <img src="https://static.wixstatic.com/media/459a71_de60414ea77c41a282e4221cd50c15e8~mv2.jpg" class="icono">
            </div>
        </div>
    </div>
  </div>
</div>

<script>
const tabs = document.querySelectorAll('.top-tab')
tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => t.classList.remove('active'))
    tab.classList.add('active')
  })
})
</script>
</body>
</html>

<?php include_once("Encabezado.php");?>

<link rel="stylesheet" href="css/css_catalogo.css">
<div class="catalogo">

      <div>
         Categoría: <select class="select-field" name="categorias" >
            <option value="">*Categoria</option>
            <option value="1">Macetas</option>
            <option value="0">Platos</option>
            <option value="2">Oaxaqueños</option>
         </select>
      </div>

      <div class="productos">
            <img src="../img/Charlie.jpg" alt="Charlie">
            <h3>Oaxaqueños</h3>
            <p>$200</p>
       </div>

       <div class="productos">
          <img src="https://manati.mx/wp-content/uploads/2020/12/Talavera-poblana-patrimonio--768x683.png" alt="platos">
          <h3>Platos</h3>
          <p>$300</p>
       </div>

       <div class="productos">
          <img src="https://media.admagazine.com/photos/64fbfad15d8d918e04f83630/16:9/w_2560%2Cc_limit/talavera.jpg" alt="macetas">
          <h3>Macetas</h3>
          <p>$500</p>
       </div>       
</div>

<?php include_once("pie.php");?>
<app-root>
<style media="screen">
#outer-circle {
background: #38B0D0;
border-radius: 50%;
height:100px;
width:100px;
}
#inner-circle {
position: relative;
background: #fff;
border-radius: 50%;
height:80px;
width:80px;
top:10px;
margin: 0px 0px 15px 10px;
}
.centereded{
  margin: auto;
  width: 50%;

}
</style>
  <div class="container">
    <div class="row d-flex justify-content-center text-center">
      <div class="col-sm-4 shadow  bg-white rounded">
        <br>
        <h4>Disponible</h4>
        <div class="centereded" id="outer-circle">
          <div id="inner-circle">
           <span id="inside-content">
              <br>DATOS</span>
             </div>
         </div><br>
<input type="text" class="form-control form-control-sm  shadow text-center bg-white rounded " id="idFecha" aria-describedby="fecha" placeholder="JUAN ANTONIO SANCHEZ PEÑA">
        <br> <input type="text" class="form-control form-control-sm shadow text-center bg-white rounded " id="idFecha" aria-describedby="fecha" placeholder="antonio1019@gmail.com">
        <br> <input type="text" class="form-control form-control-sm shadow text-center bg-white rounded " id="idFecha" aria-describedby="fecha" placeholder="Domicilio">
        <br> <select class="custom-select custom-select-sm mr-sm-2 shadow text-center bg-white rounded" id="inlineFormCustomSelect">
       <option selected>Selecciona banco...</option>
       <option value="1">One</option>
       <option value="2">Two</option>
       <option value="3">Three</option>
     </select>
     <br><br> <select class="custom-select custom-select-sm mr-sm-2 shadow text-center bg-white rounded" id="inlineFormCustomSelect">
            <option selected>Clave ...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <br><br><input type="text" class="form-control form-control-sm shadow text-center bg-white rounded " id="idFecha" aria-describedby="fecha" placeholder="$16,000.00 MXN">
          <br>
          <button class="btn-sm btn-info"type="button" name="button">Retirar</button>
<br><br>
      </div>
      <div class="col-sm-1  "><!-- IGNORE --></div>
      <div class="col-md-4 shadow  bg-white rounded ">
        <br>
        <img src="img/brand.png" width="200" height="40" alt="">
        <br>
        <br>
        <h4>Ticket</h4>
        <p><small>Beneficiario:</small></p>
        <h6>JUAN ANTONIO SANCHEZ PEÑA </h6
        <p><small>Correo electronico:</small></p>
        <h6>antonio1019@gmail.com</h6>
        <p><small>Banco:</small></p>
        <h6>CITI BANAMEX</h6>
        <p><small>Clave:</s onkeypress=""mall></p>
        <h6>012 3456 2354 2335 8679</h6>
        <p><small>Cantidad:</s onkeypress=""mall></p>
        <h6>$16,000.00 MXN</h6>
        <p><small>Hora:</s onkeypress=""mall></p>
        <h6>12:00 am</h6>
        <button class="btn-sm btn-info"type="button" name="button">Enviar</button>
      </div>
    </div>
  </div>





</app-root>

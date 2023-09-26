
  <div class="search_box">
  <input type="" name="" placeholder="Buscar Destinos, Paquetes... " class="serch" value="">
  <ul class="datalist">
<li><a href="https://www.tusktravel.com.mx/viajes-india/">India</a> </li>
<li><a href="https://www.tusktravel.com.mx/viajes-nepal/">Nepal</a> </li>
<li><a href="https://www.tusktravel.com.mx/viajes-maldivas/">Maldivas</a> </li>
<li><a href="https://www.tusktravel.com.mx/viajes-tailandia/">Tailandia</a> </li>
  </ul>
</div>


<script>
var inputSearch = document.querySelector("input.serch");
inputSearch.addEventListener("keyup", filter);
function filter() {
  var inputvalue = inputSearch.value.toUpperCase(); 
  var ul = document.querySelector("ul.datalist");
  var li = ul.querySelectorAll("li");
  li.forEach(myfunc);
    function myfunc(x) {
   if(inputvalue==""){
      x.style.display = 'none'
    }
    else{
      var cx = x.textContent.toUpperCase();
        if (cx.indexOf(inputvalue) > -1) {
            x.style.display = 'block'
        } else {
            x.style.display = ''
        }
    }
        
    }

}
</script>


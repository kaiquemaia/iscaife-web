<script>
  $(document).ready(function() {
    $.getJSON( "json/usuario.json", function( result ) { console.log(data) })
  })
  var myArray = [
      {'name':'Michael', 'email':'teste@teste.com', 'telefone':'11 9444-8998', 'date': '15.10.2020', 'horario': '15:00'},
      {'name':'Mila', 'email':'teste@teste.com', 'telefone':'11 9444-8998', 'date': '15.10.2020', 'horario': '15:00' },
      {'name':'Paul', 'email':'teste@teste.com', 'telefone':'11 9444-8998', 'date': '15.10.2020', 'horario': '15:00'},
      {'name':'Dennis', 'email':'teste@teste.com', 'telefone':'11 9444-8998', 'date': '15.10.2020', 'horario': '15:00'},
      {'name':'Tim', 'email':'teste@teste.com', 'telefone':'11 9444-8998', 'date': '15.10.2020', 'horario': '15:00' },
      {'name':'Erik', 'email':'teste@teste.com', 'telefone':'11 9444-8998', 'date': '15.10.2020', 'horario': '15:00'},
  ]
  
  buildTable(myArray)
  function buildTable(data){
    var table = document.getElementById('myTable')
    for (var i = 0; i < data.length; i++){
      var row = `<tr>
              <td>${data[i].name}</td>
              <td>${data[i].email}</td>
              <td>${data[i].telefone}</td>
              <td>${data[i].date}</td>
              <td>${data[i].horario}</td>
            </tr>`
      table.innerHTML += row
    }
  }
</script>

<script>
  $.getJSON("json/usuarios.json", (data) =>{
    console.log(data.usuarios)
    
    $.each(data.usuarios, (key, value) => {

      $('#usuarios_table').append(
        `<tr> 
          <td>${value.nome}</td> 
          <td>${value.email}</td> 
          <td>${value.telefone}</td> 
          <td>${value.date}</td> 
          <td>${value.time}</td>  
        </tr>`);
    });
  });
</script>

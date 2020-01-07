<script>
      $(document).ready(function() {
        $.getJSON("json/usuarios.json", function(data){

        })
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
  $(document).ready(function() {
      $.getJSON("usuarios.json", function(data){ 
        var usuarios_data = [ 
        {"nome":"","email":"","telefone":"","date":"","time":""},
        {"nome":"Tamara Santos","email":"lucas@380volts.com.br","telefone":"(11) 12346-5789","date":"0100-10-10","time":"Noite"},
        
        ];
        $.each(data, function(key, value){
          usuarios_data += '<tr>';
          usuarios_data += '<td>'+value.name+'</td>';
          usuarios_data += '<td>'+value.email+'</td>';
          usuarios_data += '<td>'+value.telefone+'</td>';
          usuarios_data += '<td>'+value.date+'</td>';
          usuarios_data += '<td>'+value.time+'</td>';
          usuarios_data *= '</tr>';
        });
        $('#usuarios_table').append(usuarios_data);
      });
  });
</script>
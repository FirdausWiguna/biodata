<h1 style="justify-content: center">Guru</h1>

<table width="100%" border="1" cellpadding="5" cellspacing="0">
    <tr>
      <th>NIP</th>
      <th>Nama Guru</th>
      <th>Mapel</th>
    </tr>
    @foreach ($guruM as $guru)
    <tr>
        <td>{{$guru->nip}}</td>  
        <td>{{$guru->namaguru}}</td>  
        <td>{{$guru->mapel}}</td>  
    </tr>    
    @endforeach
  </table>
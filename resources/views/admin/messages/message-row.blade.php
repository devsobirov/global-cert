<tr>
    <td>{{ $item->id }}</td>
    <td>Qaytar aloqa</td>
    <td>FIO: {{ $item->name }},<br> Kompaniya: {{$item->subject}}, <br> Kontakt: {{$item->email}}</td>
    <td>{{ $item->content}}</td>
    <td>{{ $item->created_at }}</td>
</tr>

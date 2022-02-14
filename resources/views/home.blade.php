@extends('layouts.main')

@section('container')
    
<br>
    <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">AUTHOR</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">RENT</th>
                </tr> 
                </thead>
                
                <tr>
                    <th scope="col">Widowati Sumardi</th>
                    <th scope="col"> <a href="https://badanbahasa.kemdikbud.go.id/lamanbahasa/sites/default/files/SD_Sumur%20Keramat%20Jati%20Herang.pdf">Sumur Keramat Jati Herang</a></th>
                    <th scope="col"><div class="d-flex"> <div class="product-quantity"> <input type="number" placeholder="Input Quantity" min="0" max="1"></div></th>
                </tr>

                <tr>
                    <th scope="col">Halimi Hadibrata</th>
                    <th scope="col"> <a href="https://badanbahasa.kemdikbud.go.id/lamanbahasa/sites/default/files/SD_Bengkulu-Sang%20Piatu%20Menjadi%20Raja.pdf">Sang Piatu Menjadi Raja</a></th>
                    <th scope="col"><div class="d-flex"> <div class="product-quantity"> <input type="number" placeholder="Input Quantity" min="0" max="1"></div></th>
                </tr>

                <tr>
                    <th scope="col">Mohammad Rizqi</th>
                    <th scope="col"> <a href="https://badanbahasa.kemdikbud.go.id/lamanbahasa/sites/default/files/SD_Si%20Kabayan.pdf">Si Kabayan</a></th>
                    <<th scope="col"><div class="d-flex"> <div class="product-quantity"> <input type="number" placeholder="Input Quantity" min="0" max="1"></div></th>
                </tr>
              
                <tr>
                    <th scope="col">Dian Anggraini</th>
                    <th scope="col"> <a href="https://badanbahasa.kemdikbud.go.id/lamanbahasa/sites/default/files/SD_Cerita%20Si%20Dayang%20Rindu.pdf">Si Dayang Rindu</a></th>
                    <th scope="col"><div class="d-flex"> <div class="product-quantity"> <input type="number" placeholder="Input Quantity" min="0" max="1"></div></th>
                </tr>
              
                <tr>
                    <th scope="col">Djamari</th>
                    <th scope="col"> <a href="https://badanbahasa.kemdikbud.go.id/lamanbahasa/sites/default/files/SD_Si%20Kabayan.pdf">Putri Kumalasari</a></th>
                    <th scope="col"><div class="d-flex"> <div class="product-quantity"> <input type="number" placeholder="Input Quantity" min="0" max="1"></div></th>
                </tr>

                <tr>
                    <th scope="col">Chrisna Putri</th>
                    <th scope="col"> <a href="https://badanbahasa.kemdikbud.go.id/lamanbahasa/sites/default/files/SD_Si%20Bungsu.pdf">Si Bungsu</a></th>
                    <th scope="col"><div class="d-flex"> <div class="product-quantity"> <input type="number" placeholder="Input Quantity" min="0" max="1"></div></th>
                </tr>

                <tbody>
                @foreach($Home as $post)
                    <tr>
                        <td><a class="text-decoration-none link-dark" href="/home/{{ $post->slug }}">{{ $post->author }}</a></td>
                        <td><a class="text-decoration-none link-dark text-primary" href="/home/{{ $post->slug }}">{{ $post->title }}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <a type="submit" class="bg-warning btn text-dark" href="/cart">Rent</a>
    </div><br><br>
    
@endsection
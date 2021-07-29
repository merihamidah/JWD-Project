<?php
include "./_lib/conn.php";

function getAll()
{
    global $conn;
    $query = "select * from buku";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function getById($id)
{
    global $conn;
    $param = [
        'id' => $id
    ];
    $query = "select * from buku where id=:id";
    $statement = $conn->prepare($query);
    $statement->execute($param);
    return $statement->fetch();
}

function store($param)
{
    global $conn;
    $query = "insert into buku (judul, penulis, barcode, penerbit, tahun_terbit, isbn, stok, tersedia, dipinjam, cover) 
                values (:judul, :penulis, :barcode, :penerbit, :tahun_terbit, :isbn, :stok, :tersedia, :dipinjam, :cover)";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}

function update($param)
{
    global $conn;
    $query = "update buku set judul=:judul, penulis=:penulis, barcode=:barcode, 
                penerbit=:penerbit, tahun_terbit=:tahun_terbit, isbn=:isbn, stok=:stok, 
                tersedia=:tersedia, dipinjam=:dipinjam, cover=:cover, where id=:id ";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}

function delete($param)
{
    global $conn;
    $query = "delete from buku where id=:id ";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}
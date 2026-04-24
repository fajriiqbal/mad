<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

$conn = new mysqli(
  "localhost",
  "mtssuna1_payment",
  "payment@12",
  "mtssuna1_payment"
);

if ($conn->connect_error) {
  http_response_code(500);
  echo json_encode(["error"=>"Koneksi database gagal"]);
  exit;
}

$method = $_SERVER["REQUEST_METHOD"];

// ================= CREATE =================
if ($method === "POST") {
  $data = json_decode(file_get_contents("php://input"), true);

  if (!$data) {
    http_response_code(400);
    echo json_encode(["error"=>"Payload tidak valid"]);
    exit;
  }

  $stmt = $conn->prepare("
    INSERT INTO pembayaran2
    (NomorHP, NamaSiswa, TanggalBayar, Jumlah, Metode, Keterangan)
    VALUES (?, ?, ?, ?, ?, ?)
  ");

  $stmt->bind_param(
    "ssssss",
    $data["NomorHP"],
    $data["NamaSiswa"],
    $data["TanggalBayar"],
    $data["Jumlah"],
    $data["Metode"],
    $data["Keterangan"]
  );

  $stmt->execute();

  echo json_encode(["status"=>"ok"]);
  exit;
}

// ================= READ =================
if ($method === "GET") {
  $res = $conn->query("SELECT * FROM pembayaran2 ORDER BY id DESC");
  $rows = [];

  while ($r = $res->fetch_assoc()) {
    $rows[] = $r;
  }

  echo json_encode($rows);
  exit;
}

// ================= DELETE =================
if ($method === "DELETE") {
  parse_str($_SERVER["QUERY_STRING"], $q);
  $id = $q["id"] ?? 0;

  $stmt = $conn->prepare("DELETE FROM pembayaran2 WHERE id=?");
  $stmt->bind_param("i", $id);
  $stmt->execute();

  echo json_encode(["status"=>"deleted"]);
  exit;
}

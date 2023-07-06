<?php
session_start();
session_destroy();
echo "<script>alert('Berhasil logout dari Admin Wadul 24 Jam!'); window.location='../index.php';</script>";
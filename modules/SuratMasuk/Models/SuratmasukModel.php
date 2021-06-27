<?php

namespace Modules\SuratMasuk\Models;

use CodeIgniter\Model;

class SuratmasukModel extends Model
{
    protected $table = 'surat_masuk';
    protected $primaryKey = 'id_suratmasuk';
    protected $allowedFields = ['no_suratmasuk', 'perihal', 'tgl_suratmasuk','tgl_diterima','pengirim','lampiran'];
}

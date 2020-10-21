<!DOCTYPE html>
<html>
<head>
    <title><?php echo $judul ?></title>
    <style type="text/css">
        #outtable {
            padding: 20px;
            border: 1px solid #e3e3e3;
            width: 100%;
            border-radius: 5px;
        }

        .short {
            width: 25px;
        }

        .normal {
            width: 50px;
        }

        .lebar {
            width: 100px;
        }

        p {
            line-height: 0.5;
            font-family: Helvetica;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            /*font-family: Arial Narrow;
      src: url('ARIALN.TTF');*/
            font-family: Helvetica;
            font-size: 10pt;
            color: #5E5B5C;
            /*margin: 0 auto;*/
        }

        table td {
            border: 1px solid #C3B8B8;
            padding: 3px;
            vertical-align: middle;
        }

        thead th {
            border: 1px solid #FFFFFF;
            padding: 3px;
            font-weight: bold;
            text-align: center;
            background-color: #525659;
            color: #FFFFFF;
        }

        tfoot td {
            border: 0px solid #FFFFFF;
            padding: 3px;
            vertical-align: middle;
        }

    </style>
</head>
<body>
<table width="100%" border="0">
    <tbody>
    <tr>
        <td width="75px"><!--img src="asset/dist/img/logo.png" width="75"--> &nbsp;</td>
        <th align="center" valign="middle" style="font-family: 'Arial Narrow'; color: #000000;">
            <p align="center" style="font-size:18px"><?php echo $judul ?></p>
            <!--p align="center" style="font-size:20px">UNIVERSITAS TEKNOKRAT INDONESIA</p-->
            <!--p align="center">TAHUN <?php //echo $tahun ?> BAGIAN <?php// echo $bagian ?></p></th-->
        <td width="75px">&nbsp;</td>
    </tr>
    </tbody>
</table>
<hr>
<br>
<table width="100%">
    <thead>
    <thead>
          <tr>
            <th width="5%">No</th>
            <th>ID Transaksi</th>
            <th>Barcode</th>
            <th>Nama Barang</th>
            <th>Jenis</th>
            <th>Type/Merk</th>
            <th>Kondisi</th>
            <th>Lokasi</th>
            <th>Jumlah</th>    
            
            
          </tr>
            </thead>
              <tbody>
               <?php $i=1; foreach ($laporaninv as $laporaninv){ ?>

          <tr>
                 <td><?php echo $i ?></td>
                   <td><?php echo $laporaninv->id_masuk ?></td>
                   
                   <td><?php echo $laporaninv->barcode ?></td>
                   <td><?php echo $laporaninv->nama_barang ?></td>
                   <td><?php echo $laporaninv->jenis_barang ?></td>
                   <td><?php echo $laporaninv->type_barang ?></td>
                   <td><?php echo $laporaninv->kondisi ?></td>
                   <td><?php echo $laporaninv->lokasi_barang ?></td>
                   <td><?php echo $laporaninv->jumlah ?></td>
                   
                  
          </tr>
    <?php
        }
    ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5">&nbsp;</td>
            <td colspan="2">
                <p>Bandarlampung, <?php echo tgl_indo(date('Y-m-d')); ?></p>
                <br>
                <p>Kepala</p>
                <br><br><br><br><br>
                <p>....................................</p>
            </td>
        </tr>
    </tfoot>
</table>

</body>
</html>
<html>
<head>
    <title>Giấy Hoãn Nghĩa Vụ Quân Sự</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <base href="<?php echo base_url(); ?>" />
    <style>
        * {padding: 0px; margin: 0px;}
        body{background-color: white; font:13pt "Times New Roman";}
        body{width: 8.27in; min-height: 10.7in; }
        .span5{width: 50%; display: block;}
        .text-center {text-align: center;} .text-strong {font-weight: bold;}
        .pull-left{float: left;} .pull-right{float: right}
        .text-header {text-align: center; font-size: 22pt; text-transform: uppercase; display: block; padding: 10px; }
        #wrapper  {width: 7.22in; padding: 0in 0.35in 0in 0.7in}
        .law { font-style: italic;}
        
        .unstyle {list-style: none inside;}
        .print { cursor: pointer;}
        
        .thongkedrl {
            list-style: none inside;
            margin-right: 0.5in;
        }
        .thongkedrl li {
            display: block;
            float: left;
        }
        .thongkedrl li span{
            display: block;
            text-align: center;
            border: 1px solid;
            padding: 2px 5px;
        }
        .thongkedrl li > span.tk-header{ font-weight: bold; }
        .table-bordered {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            border-collapse: separate;
            border-color: #DDDDDD #DDDDDD #DDDDDD #DDDDDD;
            border-image: none;
            border-radius: 4px;
            border-style: solid solid solid solid;
            border-width: 1px 1px 1px 1px;
        }
        .table {
            margin-bottom: 20px;
            
        }
        .table {
            background-color: rgba(0, 0, 0, 0);
            border-collapse: collapse;
            border-spacing: 0;
            
        }
        .table th, 
        .table td {
            border-top: 1px solid #DDDDDD;
            line-height: 20px;
            padding: 4px 8px;
            text-align: left;
            vertical-align: top;
        }
        table.ngoaitru tr td {
            font-size: 13px;
        }
        .table-bordered th, 
        .table-bordered td {
            border-left: 1px solid #DDDDDD;
        }
        .thongke {
            display: block;
            float: left;
            margin-top: 20px;
        }
    </style>
</head>

<body>
<button class="print" onclick="this.style.display ='none';window.print();;"><img src="templates/img/btn_print.gif" /></button>
<div id="wrapper">
    <h4 class="text-header">Bảng Thống Kê Điểm Rèn Ruyện</h4>
    <ul class="unstyle pull-left info">
        <li>Lớp: <?php echo $malop; ?></li>
        <li>Mã học kỳ: <?php echo $mahk; ?></li>
    </ul>
    <ul class="thongkedrl pull-right">
        <?php $ts = 0; foreach($thongke as $k => $v) : ?>
            <li>
                <span class="tk-header"><?php echo $v['XepLoai']; ?></span>
                <span><?php echo $v['DCD']; $ts+=$v['DCD']; ?></span>
            </li>
        <?php endforeach; ?>
            <li><span class="tk-header">Tổng Số</span><span><?php echo $ts; ?></span></li>
    </ul>
    <table class="table table-bordered table-striped table-hover thongke">
        <tr>
            <th>STT</th>
            <th>MSV</th>
            <th>Họ và tên</th>
            <th>Điểm</th>
            <th>Điểm CĐ</th>
            <th>Xếp Loại</th>
            <th>Ngày Xác Nhận</th>
        </tr>
<?php
$i = 1;
foreach($kqtk as $k => $kq) {
?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $kq['MaSV']; ?></td>
            <td><?php echo $kq['HoTen']; ?></td>
            <td><?php echo $kq['Diem']; ?></td>
            <td><?php echo $kq['DiemCD']; ?></td>
            <td><?php echo $kq['XepLoai']; ?></td>
            <td><?php echo $kq['NgayXN']; ?></td>
        </tr>
<?php
++$i;
}
?>
    </table>
    <div class="pull-right">
        Ngày <?php echo date('d'); ?>, tháng <?php echo date('m'); ?>, năm <?php echo date('Y'); ?>
    </div>
</div>

</body>
</html>
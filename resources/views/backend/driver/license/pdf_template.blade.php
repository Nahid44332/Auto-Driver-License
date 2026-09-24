<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>অটো ড্রাইভার লাইসেন্স আবেদনপত্র ও স্লিপ</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nikosh&display=swap');
        
        body {
            font-family: 'Nikosh', 'SolaimanLipi', sans-serif;
            background: #f5f5f5;
            color: #000;
            margin: 0;
            padding: 20px;
        }
        .official-page {
            max-width: 800px;
            margin: auto;
            padding: 40px;
            background: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        /* জলছাপ (Watermark) */
        .watermark {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 80px;
            color: rgba(0, 128, 0, 0.04);
            z-index: 0;
            font-weight: bold;
            text-align: center;
            pointer-events: none;
            text-transform: uppercase;
        }
        .header-section {
            text-align: center;
            position: relative;
            z-index: 1;
            border-bottom: 2px solid #000;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .header-section h3 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }
        .header-section h1 {
            margin: 5px 0;
            font-size: 24px;
            color: #0b5345;
        }
        .header-section p {
            margin: 2px 0;
            font-size: 14px;
        }
        .top-info-table, .details-table, .footer-table {
            width: 100%;
            border-collapse: collapse;
            position: relative;
            z-index: 1;
        }
        .top-info-table td {
            font-size: 14px;
            padding: 5px 0;
        }
        .details-table {
            margin-top: 15px;
        }
        .details-table th, .details-table td {
            border: 1px solid #333;
            padding: 8px 12px;
            font-size: 14px;
            text-align: left;
        }
        .details-table th {
            background-color: #e8f8f5;
            color: #111;
            width: 32%;
        }
        .driver-photo {
            width: 110px;
            height: 130px;
            border: 1px solid #000;
            object-fit: cover;
            padding: 2px;
            background: #fff;
        }
        .badge {
            display: inline-block;
            background-color: #f39c12;
            color: #fff;
            padding: 3px 10px;
            font-size: 13px;
            border-radius: 3px;
            font-weight: bold;
        }
        .badge-success {
            background-color: #27ae60;
        }
        .instructions {
            margin-top: 20px;
            font-size: 12px;
            border: 1px dashed #7f8c8d;
            padding: 10px;
            background: #f9f9f9;
        }
        .instructions h4 {
            margin: 0 0 5px 0;
            font-size: 13px;
            color: #c0392b;
        }
        .instructions ul {
            margin: 0;
            padding-left: 15px;
        }
        .footer-section {
            margin-top: 50px;
            width: 100%;
            position: relative;
            z-index: 1;
        }
        .footer-section td {
            width: 50%;
            text-align: center;
            vertical-align: bottom;
        }
        .signature-line {
            border-top: 1px solid #000;
            display: inline-block;
            width: 220px;
            padding-top: 5px;
            font-size: 14px;
            font-weight: bold;
        }
        @media print {
            body {
                background: none;
                padding: 0;
            }
            .official-page {
                border: none;
                box-shadow: none;
                padding: 0;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="official-page">
    <!-- জলছাপ -->
    <div class="watermark">VERIFIED & PENDING</div>

    <!-- Header -->
    <div class="header-section">
        <h3>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h3>
        <p>স্থানীয় সরকার, পল্লী উন্নয়ন ও সমবায় মন্ত্রণালয়</p>
        <h1>অটো ভ্যান ও ইজিবাইক চালক নিবন্ধন কর্তৃপক্ষ</h1>
        <p>গাজীপুর সদর কার্যালয়, গাজীপুর।</p>
        <p style="margin-top: 8px; font-weight: bold; text-decoration: underline;">চালকের লাইসেন্স আবেদন ও স্বীকৃতিপত্র (Acknowledgment Slip)</p>
    </div>

    <!-- Top Meta Info -->
    <table class="top-info-table">
        <tr>
            <td><b>আবেদন আইডি:</b> #LIC-{{ $driver->id + 1000 }}</td>
            <td style="text-align: right;"><b>তারিখ:</b> {{ date('d-m-Y') }}</td>
        </tr>
    </table>

    <!-- Driver Info Table -->
    <table class="details-table">
        <tr>
            <th>আবেদনের বর্তমান স্ট্যাটাস</th>
            <td>
                <span class="badge {{ $driver->status == 'Approved' ? 'badge-success' : '' }}">
                    {{ $driver->status }}
                </span>
                <span style="font-size: 12px; color: #555; margin-left: 10px;">(যাচাইবাছাই চলছে)</span>
            </td>
            <td rowspan="4" style="text-align: center; width: 130px;">
                @if($driver->driver_photo)
                    <img src="{{ asset($driver->driver_photo) }}" alt="Driver Photo" class="driver-photo">
                @else
                    <div style="width:110px; height:130px; border:1px solid #ccc; display:flex; align-items:center; justify-content:center; font-size:12px;">ছবি নেই</div>
                @endif
            </td>
        </tr>
        <tr>
            <th>চালকের পূর্ণ নাম</th>
            <td colspan="1"><b>{{ $driver->name }}</b></td>
        </tr>
        <tr>
            <th>পিতার নাম</th>
            <td colspan="1">{{ $driver->father_name }}</td>
        </tr>
        <tr>
            <th>হোয়াটসঅ্যাপ / মোবাইল নম্বর</th>
            <td colspan="1">{{ $driver->whatsapp_number ?? $driver->mobile }}</td>
        </tr>
        <tr>
            <th>জাতীয় পরিচয়পত্র (NID) নম্বর</th>
            <td colspan="2"><b>{{ $driver->nid_number }}</b></td>
        </tr>
        <tr>
            <th>জন্ম তারিখ</th>
            <td colspan="2">{{ $driver->date_of_birth }}</td>
        </tr>
        <tr>
            <th>নিবন্ধিত গাড়ির ধরন</th>
            <td colspan="2"><b>{{ ucfirst(str_replace('_', ' ', $driver->vehicle_type)) }}</b></td>
        </tr>
        <tr>
            <th>গাড়ির নম্বর / প্লেট</th>
            <td colspan="2"><b>{{ $driver->vehicle_number }}</b></td>
        </tr>
        <tr>
            <th>স্থায়ী ঠিকানা</th>
            <td colspan="2">{{ $driver->address }}</td>
        </tr>
    </table>

    <!-- Instructions -->
    <div class="instructions">
        <h4>জরুরি নির্দেশনাাবলী:</h4>
        <ul>
            <li>এই স্লিপটি প্রিন্ট করে সংরক্ষণ করুন। এটি পরবর্তী ড্রাইভিং লাইসেন্স কার্ড সংগ্রহের সময় বাধ্যতামূলক দেখাতে হবে।</li>
            <li>অফিস কর্তৃক যাচাই-বাছাই সম্পন্ন হওয়ার পর চূড়ান্ত লাইসেন্স প্রদান করা হবে।</li>
            <li>যেকোনো তথ্যের ভুলত্রুতির জন্য কর্তৃপক্ষের সাথে যোগাযোগ করুন।</li>
        </ul>
    </div>

    <!-- Signatures -->
    <table class="footer-section">
        <tr>
            <td>
                <br><br>
                <div class="signature-line">চালকের স্বাক্ষর</div>
            </td>
           <td>
                <!-- ডিজিটাল স্বাক্ষর বা সিল ইমেজ -->
                <img src="{{ asset('signature.png') }}" alt="Signature" style="width: 220px; height: auto; margin-bottom: -5px;">
                <br>
                <div class="signature-line">কর্তৃপক্ষের স্বাক্ষর ও সীলমোহর</div>
            </td>
        </tr>
    </table>

    <!-- Print Button (Hidden in Print) -->
    <div style="text-align: center; margin-top: 30px;" class="no-print">
        <button onclick="window.print()" style="background: #0b5345; color: white; border: none; padding: 10px 25px; font-size: 16px; border-radius: 4px; cursor: pointer; font-weight: bold;">
            🖨️ প্রিন্ট / পিডিএফ ডাউনলোড করুন
        </button>
        <a href="{{ route('driver.license.apply') }}" style="margin-left: 15px; text-decoration: none; color: #333; font-size: 14px;">← ড্যাশবোর্ডে ফিরে যান</a>
    </div>
</div>

</body>
</html>
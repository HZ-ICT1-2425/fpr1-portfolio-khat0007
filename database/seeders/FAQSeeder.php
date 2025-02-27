<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FAQ::insert([
            [
                'question' => 'How can you print a document from your laptop at HZ?',
                'answer' => '<b>Web print</b><br><ol>
                            <li>Click <a href="https://hz.mynetpay.nl/">here</a> and log in with your
                            HZ username and password.</li>
                            <li>Tap <b>Web Print.</b></li>
                            <li>At <b>Step 1: Select a printer,</b> check the settings
                            (format, single/double-sided etc.)</li>
                            <li>Click in the field at <b>Step 2: Select files</b> to choose your files (you can also
                             drag and drop).</li>
                            <li>Click on <b>Upload files now.</b></li>
                        </ol>
                        <b>Print</b><br>
                        <ol>
                            <li>In the desired application, choose print/print and select the HZ_Printer.</li>
                            <li>When the print command is given, log on to the printer by entering your HZ card
                             or username/password.</li>
                            <li>On the printer, press <b>Print Release.</b></li>
                            <li>After scanning, press the following symbol on the printer to log off.</li>
                        </ol>'

            ],
            FAQ::insert(
                [
                'question' => 'How do I scan documents?',
                'answer' => '<ol>
                            <li>Log on to the printer using your HZ card or by entering your HZ username
                            and password.</li>
                            <li>Choose the <b>Scan</b> option in the menu.</li>
                            <li>Place the original(s) on the feeder or glass plate.</li>
                        </ol>
                        <b>Double-sided scanning (optional)</b><br>
                        <ol>
                            <li>Press <b>Change settings</b></li>
                            <li>For duplex mode, select the <b>2-sided</b> option</li>
                            <li>Press <b>Start</b></li>
                            <li>After scanning, press the following symbol on the printer to log off</li>
                        </ol>'
                ]
            ),
            FAQ::insert(
                [
                'question' => 'How to buy something from HZ webshop?',
                'answer' => 'You go to the
<a href="https://webshop.hz.nl/webshopapp/default.aspx?menu=082076044027019251066025111065201099237062130097">
HZ Webshop</a> and log in into your
                 HZ account. After that, you should be able to see the options.'
                ]
            ),
            FAQ::insert(
                [
                'question' => 'How to book a project group space?',
                'answer' => 'You can book a room <a href="https://hzuniversity.topdesk.net/tas/public/ssp/">here.</a>
 Select "make a reservation", then your room of choice. Be aware that only the rooms that start with
                 GW are in Middelburg!<br><br>
                            <b>Terms of supply:</b><br>
                            If you are not present in the meeting room 15 minutes after the start of your reservation,
                             your reservation will be canceled. The space is then free to use by others.'
                ]
            ),
            FAQ::insert(
                [
                'question' => 'Parking at HZ?',
                'answer' => '<b>Free parking near HZ</b><br>
                            Free parking is available at the car park at Poelendaelesingel 12 in Middelburg.
                             This is at a few minutes’ walk from HZ. Unfortunately, it is not possible to park
                              directly at the HZ premises.However, there is a disabled parking space available
                              right next to the HZ building at Het Groene Woud 1-3.<br><br>
                            <b>Car park Poelendaelesingel</b><br>
                            At the barrier of the car park the Poelendaelesingel you can ring the bell. After
                             passing the barrier,follow the signs to the HZ parking places, marked with a white
                              sign with the HZ logo.<br><br>
                            <b>With HZ pass or ring the bell</b><br>
                            Students and staff can only enter by presenting their HZ pass at the barriers, guests
                            can ring the bell at the barrier.<br><br>
                            <b>Walking to HZ location</b><br>
                            If you park at the Poelendaelesingel you can reach the HZ via the pedestrian tunnel.'
                ]
            ),
        ]);
    }
}

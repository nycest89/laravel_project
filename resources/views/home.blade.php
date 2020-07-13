@extends('layouts.app')
@section('title')
    Welcome >_<
@endsection
@section('content')
<div class="content">
    <div class="container">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="head-bc">
                    MY RESUME
                </div>
            </div>

            <div class="panel-body panel-body-inc">
                <div class="col-md-12 panel-body-inc">
                    <div class="col-md-12 row">
                        <div class="col-md-9 m-t-10 semi-bold f-s-20"> 
                            NUR'RUL FARAHIM NABILAH BT SALEH <br/>
                            <span class="m-t-10 semi-bold f-s-13">+6018 371 5774 │ nurrulfarahim@gmail.com</span><br/>
                            <span class="m-t-10 semi-bold f-s-13">8-8, Alam Idaman Serviced Apartment, No 2, Jalan Budiman 22/3, Seksyen
                            22, 40300 Shah Alam, Selangor</span>
                        </div>
                        <div class="col-md-2 offset-md-1 profile-image profile-right"><img src="{{asset('images/MyPicture.png')}}"></div>
                    </div>

                    <div class="col-md-12 row">
                        <div class="col-md-7 semi-bold f-s-15 text-center"> 
                            WORK EXPERIENCES
                        </div>
                        <!--<div class="col-md-5 semi-bold f-s-15 text-center"> 
                            SKILLS
                        </div>-->
                    </div>

                    <div class="col-md-12 row">
                        <div class="col-md-7 m-t-20"> 
                            <span class="semi-bold f-s-14">APPLICATION SUPPORT SPECIALIST - SQL</span><br/>
                            (Apr 2020 – Present)
                        </div>
                        <!--<div class="col-md-5 m-t-20"> 
                            <span class="semi-bold f-s-14">Programming:</span> PHP (Yii and Laravel), Javascript, Sencha ExtJS and jQuery,HTML, CSS
                        </div>-->
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-7 semi-bold"> 
                            DKSH CORPORATE SHARED SERVICE CENTRE
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-7"> 
                            <ul>
                                <li>Provide 1st level support for service request from country users and investigate reported issue</li>
                                <li>Provide daily operational support, including troubleshooting and installation of applications</li>
                                <li>Involved in database maintenance (MSSQL) to provide user support for local and global business applications</li>
                                <li>Liaise and coordinate with other team in the service centre for arising issue</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12 row">
                        <div class="col-md-7 m-t-20 semi-bold f-s-14"> 
                            SOFTWARE DEVELOPMENT AND SUPPORT ENGINEER
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-7"> 
                            (Sept 2015 – Feb 2020)
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-7 semi-bold"> 
                            CNI ENTERPRISE (M) SDN BHD
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-7"> 
                            <ul>
                                <li>Provide user support, bug fixing and new enhancement development for MLM system (Retail POS) using PHP (Sencha ExtJS and Yii Framework) and MySQL database</li>
                                <li>Provide user support, bug fixing and new enhancement development for company websites using PHP (Laravel), HTML, Javascript and CSS</li>
                                <li>Provide troubleshooting support for other existing application to end-users via telephone, email and remotely via Teamviewer</li>
                                <li>Write SQL query for report and data analysis purposes</li>
                                <li>Design reports with iReport</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12 row">
                        <div class="col-md-7 m-t-20 semi-bold f-s-14"> 
                            SOFTWARE ENGINEER
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-7"> 
                            (Sept 2011 – Jan 2015)
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-7 semi-bold"> 
                            CHEMOINFORMATICS SDN BHD
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div class="col-md-7"> 
                            <ul>
                                <li>Involved in system studies, project development, troubleshooting and bug fixing of LIMS (Lab Information Management System) using Java and PostgreSQL database</li>
                                <li>Involved in system studies, project configuration, troubleshooting and bug fixing using Matrix Gemini LIMS (configurable system solution)</li>
                                <li>Install hardware (server, client PC, routers, switch, printer, barcode scanners, etc) and developed software products at client sites</li>
                                <li>Provide troubleshooting support to end-users via telephone, email and remotely via Teamviewer</li>
                                <li>Design reports with iReport and Crystal Report</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
                </div>

                <div class="col-md-12 panel-body-inc">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="tab" href="#work">Work Experience</a></li>
                        <li><a data-toggle="tab" href="#skills">Skills</a></li>
                        <li><a data-toggle="tab" href="#education">Education</a></li>
                        <li><a data-toggle="tab" href="#references">References</a></li>
                      </ul>
                    
                      <div class="tab-content">
                        <!--Work Experience-->
                        <div id="work" class="tab-pane fade in active">
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="m-t-20"> 
                                        <span class="semi-bold f-s-16">APPLICATION SUPPORT SPECIALIST - SQL</span>
                                        (Apr 2020 – Present)
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="semi-bold blue-font"> 
                                        DKSH CORPORATE SHARED SERVICE CENTRE
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div> 
                                        <ul>
                                            <li>Provide 1st level support for service request from country users and investigate reported issue</li>
                                            <li>Provide daily operational support, including troubleshooting and installation of applications</li>
                                            <li>Involved in database maintenance (MSSQL) to provide user support for local and global business applications</li>
                                            <li>Liaise and coordinate with other team in the service centre for arising issue</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="m-t-20"> 
                                        <span class="semi-bold f-s-16">SOFTWARE DEVELOPMENT AND SUPPORT ENGINEER</span>
                                        (Sept 2015 – Feb 2020)
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="semi-bold blue-font"> 
                                        CNI ENTERPRISE (M) SDN BHD
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div> 
                                        <ul>
                                            <li>Provide user support, bug fixing and new enhancement development for MLM system (Retail POS) using PHP (Sencha ExtJS and Yii Framework) and MySQL database</li>
                                            <li>Provide user support, bug fixing and new enhancement development for company websites using PHP (Laravel), HTML, Javascript and CSS</li>
                                            <li>Provide troubleshooting support for other existing application to end-users via telephone, email and remotely via Teamviewer</li>
                                            <li>Write SQL query for report and data analysis purposes</li>
                                            <li>Design reports with iReport</li><li>Provide 1st level support for service request from country users and investigate reported issue</li>
                                            <li>Provide daily operational support, including troubleshooting and installation of applications</li>
                                            <li>Involved in database maintenance (MSSQL) to provide user support for local and global business applications</li>
                                            <li>Liaise and coordinate with other team in the service centre for arising issue</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="m-t-20"> 
                                        <span class="semi-bold f-s-16">SOFTWARE ENGINEER</span>
                                        (Sept 2011 – Jan 2015)
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="semi-bold blue-font"> 
                                        CHEMOINFORMATICS SDN BHD
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div> 
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

                        <!--Skills-->
                        <div id="skills" class="tab-pane fade">
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="semi-bold f-s-16 blue-font"> 
                                        Programming
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    PHP (Yii and Laravel), Javascript, Sencha ExtJS and jQuery, HTML, CSS
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="semi-bold f-s-16 blue-font"> 
                                        Databases
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    MySQL, PostgreSQL, Microsoft SQL
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="semi-bold f-s-16 blue-font"> 
                                        Version Control
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    GIT, SVN
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="semi-bold f-s-16 blue-font"> 
                                        Reporting Tools
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    iReport/Jasper Report and Crystal Report
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="semi-bold f-s-16 blue-font"> 
                                        Software
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    JIRA, Microsoft Office Package (Word, Excel, Powerpoint, Outlook etc.)
                                </div>
                            </div>
                        </div>

                        <!--Education-->
                        <div id="education" class="tab-pane fade">
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="m-t-20"> 
                                        <span class="semi-bold f-s-16 blue-font">University of Malaya, Kuala Lumpur</span><br/>
                                        2008 – 2011
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div> 
                                        Bachelor of Science (Bioinformatics)
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="m-t-20"> 
                                        <span class="semi-bold f-s-16 blue-font">University of Malaya, Kuala Lumpur</span><br/>
                                        2007 – 2008
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div> 
                                        Foundation Studies (Life Sciences)
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!--References-->
                         <div id="references" class="tab-pane fade">
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="semi-bold f-s-16 blue-font"> 
                                        Teh Kok Han
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    Manager, System Development Team<br/>
                                    Phone: 016-2093557<br/>
                                    Email: tehkokhan@cni.my
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12 row">
                                    <div class="semi-bold f-s-16 blue-font"> 
                                        Pradeep Selvarajah
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    Team Leader<br/>
                                    Phone: 012-6929031<br/>
                                    E-mail: pradeepselvarajah86@gmail.com
                                </div>
                            </div>
                        </div>

                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
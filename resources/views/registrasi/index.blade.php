<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <title>Miri UI Kit</title>

    <!-- Vendor css -->
    <link rel="stylesheet" href="{{asset('src/vendors/@mdi/font/css/materialdesignicons.min.css')}}">

    <!-- Base css with customised bootstrap included -->
    <link rel="stylesheet" href="{{asset('src/css/miri-ui-kit-free.css')}}">

    <!-- Stylesheet for demo page specific css -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
</head>
<body class="bg-gradient-black">
    <header class="miri-ui-kit-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-on-scroll">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.svg" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#miriUiKitNavbar"
                    aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="miriUiKitNavbar">
                    <div class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="http://bootstrapdash.com/demo/miri-ui-kit-pro/documentation/documentation.html" target="_blank">Docs</span></a>
                        </li>
            
                        <li class="nav-item">
                            <a class="nav-link" href="#demo-content">UI Kits</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Example Pages
                            </a>
                            <div class="dropdown-menu dropdown-menu-right ">
                                <a href="landing.html" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-shape-outline"></i>Landing Page</a>
                                <a href="login.html" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-lock-outline"></i>Login Page</a>
                                <a href="profile.html" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-shield-account-outline"></i>Profile Page</a>
                            </div>
                        </li>
            
                        <li class="nav-item">

                            <a class="nav-link nav-icon icon-fb" href="#"><i class="mdi mdi-facebook-box"></i></a>

                            <a class="nav-link nav-icon icon-twitter" href="#"><i class="mdi mdi-twitter-box"></i></a>
 
                            <a class="nav-link nav-icon icon-insta" href="#"><i class="mdi mdi-instagram"></i></a>
                            
                        </li>
            
                        <form action="#" class="form-inline ml-lg-3">
                            <button class="btn btn-danger">Download Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <div class="miri-ui-kit-header-content text-center text-white d-flex flex-column justify-content-center align-items-center">
            <img src="assets/images/logo_icon.svg" alt="logo" height="78" width="78" class="mb-4">
            <h1 class="display-3 text-white">Miri UI Kit</h1>
            <p class="h3 font-weight-light text-white">A beautiful free bootstrap 4 UI Kit developed by BootstrapDash.</p>
            <p class="py-3"><a href="#!" class="btn btn-danger mr-3">Upgrade to Pro</a><a href="#demo-content" class="btn btn-primary">Explore UI Kit</a></p>
        </div>
    </header>
    <div class="container content-wrapper" id="demo-content">
        <div class="card card-demo-wrapper">
            <div class="card-body mb-4">
                <h2 class="card-title">Main Colors</h2>
                <div class="demo-color-box bg-danger"></div>
                <div class="demo-color-box bg-primary"></div>
                <div class="demo-color-box bg-info"></div>
                <div class="demo-color-box bg-success"></div>
                <div class="demo-color-box bg-warning"></div>
                <div class="demo-color-box bg-light"></div>
            </div>
            <div class="card-body mb-4">
                <h2 class="card-title">Typography</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="pb-30">h1. Heading 1</h1>
                        <h2 class="pb-30">h2. Heading 2</h2>
                        <h3 class="pb-30">h3. Heading 3</h3>
                        <h4 class="pb-30">h4. Heading 4</h4>
                        <h5 class="pb-30">h5. Heading 5</h5>
                        <h6 class="pb-30">h6. Heading 6</h6>
                    </div>
                    <div class="col-md-6">
                        <p class="display-1">Display 1</p>
                        <p class="display-2">Display 2</p>
                        <p class="display-3">Display 3</p>
                        <p class="display-4">Display 4</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Links</h6>
                        <a href="#" class="text-primary mr-2">Primary</a>
                        <a href="#" class="text-info mr-2">Info</a>
                        <a href="#" class="text-success mr-2">Success</a>
                        <a href="#" class="text-warning mr-2">Warning</a>
                        <a href="#" class="text-danger mr-2">Danger</a>
                        <a href="#" class="text-dark mr-2">Dark</a>
                    </div>
                    <div class="col-md-6">
                        <h6>Paragraph</h6>
                        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, facilis iste est sequi fugiat architecto atque natus placeat.</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, facilis iste est sequi fugiat architecto atque natus placeat.</p>
                    </div>
                </div>
            </div>
            <div class="card-body mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="card-title">Blockquote</h2>
                        <blockquote class="blockquote">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>                              
                    </div>
                    <div class="col-md-6">
                        <h2 class="card-title">Section</h2>

                        <h5>Section Title</h5>
                        <p class="h6 font-weight-normal">Section description text</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, exercitationem! </p>
                    </div>
                </div>
            </div>
            <div class="card-body mb-4">
                <h2 class="card-title">Buttons</h2>
                <div class="row">
                    <div class="col-md-6 mb-4 pb-1">
                        <h6 class="mb-3">Default Buttons</h6>
                        <div class="miri-ui-kit-demo">
                            <button class="btn btn-primary">Primary</button>
                            <button class="btn btn-success">Success</button>
                            <button class="btn btn-danger">Danger</button>
                            <button class="btn btn-info">Info</button>
                            <button class="btn btn-warning">Warning</button>
                            <button class="btn btn-dark">Dark</button>
                            <button class="btn btn-light">Light</button>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 pb-1">
                        <h6 class="mb-3">Small Buttons</h6>
                        <div class="miri-ui-kit-demo">
                            <button class="btn btn-primary btn-sm">Primary</button>
                            <button class="btn btn-success btn-sm">Success</button>
                            <button class="btn btn-danger btn-sm">Danger</button>
                            <button class="btn btn-info btn-sm">Info</button>
                            <button class="btn btn-warning btn-sm">Warning</button>
                            <button class="btn btn-dark btn-sm">Dark</button>
                            <button class="btn btn-light btn-sm">Light</button>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin">
                        <h6 class="pb-3">Large Buttons</h6>
                        <div class="miri-ui-kit-demo">
                            <button class="btn btn-primary btn-lg">Primary</button>
                            <button class="btn btn-success btn-lg">Success</button>
                            <button class="btn btn-danger btn-lg">Danger</button>
                            <button class="btn btn-info btn-lg">Info</button>
                            <button class="btn btn-warning btn-lg">Warning</button>
                            <button class="btn btn-dark btn-lg">Dark</button>
                            <button class="btn btn-light btn-lg">Light</button>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin">
                        <h6 class="pb-3">Outline Buttons</h6>
                        <div class="miri-ui-kit-demo">
                            <button class="btn btn-outline-primary">Primary</button>
                            <button class="btn btn-outline-success">Success</button>
                            <button class="btn btn-outline-danger">Danger</button>
                            <button class="btn btn-outline-info">Info</button>
                            <button class="btn btn-outline-warning">Warning</button>
                            <button class="btn btn-outline-dark">Dark</button>
                            <button class="btn btn-outline-light">Light</button>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin">
                        <h6 class="pb-3">Soft Buttons</h6>
                        <div class="miri-ui-kit-demo">
                            <button class="btn btn-soft-primary">Primary</button>
                            <button class="btn btn-soft-success">Success</button>
                            <button class="btn btn-soft-danger">Danger</button>
                            <button class="btn btn-soft-info">Info</button>
                            <button class="btn btn-soft-warning">Warning</button>
                            <button class="btn btn-soft-dark">Dark</button>
                            <button class="btn btn-soft-light">Light</button>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin">
                        <h6 class="pb-3">Buttons Style</h6>
                        <div class="miri-ui-kit-demo mb-4">
                            <button class="btn btn-outline-primary btn-squared"><i class="mdi mdi-heart-outline"></i>
                                Outline</button>
                            <button class="btn btn-outline-primary btn-squared"> Outline</button>
                            <button class="btn btn-outline-primary btn-squared"><i class="mdi mdi-heart-outline"></i></button>
                            <button class="btn btn-outline-success"><i class="mdi mdi-heart-outline"></i> Outline</button>
                            <button class="btn btn-outline-success"> Outline</button>
                            <button class="btn btn-outline-success"><i class="mdi mdi-heart-outline"></i></button>
                            <button class="btn btn-danger"><i class="mdi mdi-heart-outline"></i> Default</button>
                            <button class="btn btn-danger"> Default</button>
                            <button class="btn btn-danger"><i class="mdi mdi-heart-outline"></i></button>
                        </div>
                        <div class="miri-ui-kit-demo">
                            <button class="btn btn-danger btn-pill"><i class="mdi mdi-heart-outline"></i> Round</button>
                            <button class="btn btn-danger btn-pill"> Round</button>
                            <button class="btn btn-danger btn-rounded"><i class="mdi mdi-heart-outline"></i></button>
                            <button class="btn btn-outline-danger btn-pill"><i class="mdi mdi-heart-outline"></i>
                                Outline</button>
                            <button class="btn btn-outline-danger btn-pill"> Outline</button>
                            <button class="btn btn-outline-danger btn-rounded"><i class="mdi mdi-heart-outline"></i></button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h6 class="pb-3">Block Level Buttons</h6>
                        <div class="miri-ui-kit-demo mb-4">
                            <Button class="btn btn-block btn-primary"> Block level Button</Button>
                            <Button class="btn btn-block btn-dark"> Block level Button</Button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body mb-4">
                <h2 class="card-title">Form Controls</h2>
                <h6 class="pb-3">Square inputs</h6>
                <div class="miri-ui-kit-demo mb-4 pb-1">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="defaultInput" class="sr-only">Default Input</label>
                            <input type="text" class="form-control" id="defaultInput" name="defaultInput" placeholder="Default" value="Default">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="successInput" class="sr-only">Input Success</label>
                            <input type="text" class="form-control is-valid" id="successInput" name="successInput" placeholder="Success" value="Success">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="dangerInput" class="sr-only">Input Danger</label>
                            <input type="text" class="form-control is-invalid" id="dangerInput" name="dangerInput" placeholder="Danger" value="Danger">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="iconLeftInput" class="sr-only">Input with left icon</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="mdi mdi-star-circle input-group-text"></span>
                                </div>
                                <input type="text" class="form-control" id="iconLeftInput" name="iconLeftInput" placeholder="left with icon" value="left with icon">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="iconRightInput" class="sr-only">Input with right icon</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="iconRightInput" name="iconRightInput" placeholder="right with icon" value="right with icon">
                                <div class="input-group-append">
                                    <span class="mdi mdi-star-circle input-group-text"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h6 class="pb-3">Pilled inputs</h6>
                <div class="miri-ui-kit-demo mb-4 pb-1">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="defaultInput" class="sr-only">Default Input</label>
                            <input type="text" class="form-control form-control-pill" id="defaultInput" name="defaultInput" placeholder="Default" value="Default">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="successInput" class="sr-only">Input Success</label>
                            <input type="text" class="form-control form-control-pill is-valid" id="successInput" name="successInput" placeholder="Success" value="Success">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="dangerInput" class="sr-only">Input Danger</label>
                            <input type="text" class="form-control form-control-pill is-invalid" id="dangerInput" name="dangerInput" placeholder="Danger" value="Danger">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="iconLeftInput" class="sr-only">Input with left icon</label>
                            <div class="input-group input-group-pill">
                                <div class="input-group-prepend">
                                    <span class="mdi mdi-star-circle input-group-text"></span>
                                </div>
                                <input type="text" class="form-control" id="iconLeftInput" name="iconLeftInput" placeholder="left with icon" value="left with icon">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="iconRightInput" class="sr-only">Input with right icon</label>
                            <div class="input-group input-group-pill">
                                <input type="text" class="form-control" id="iconRightInput" name="iconRightInput" placeholder="right with icon" value="right with icon">
                                <div class="input-group-append">
                                    <span class="mdi mdi-star-circle input-group-text"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 pb-2 grid-margin">
                        <h6 class="pb-3">Checkboxes</h6>
                        <div class="miri-ui-kit-demo">
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">Unchecked</label>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked>
                                <label class="form-check-label" for="defaultCheck2">Checked</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" disabled>
                                <label class="form-check-label" for="defaultCheck3">Disabled Unchecked</label>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck4" disabled checked>
                                <label class="form-check-label" for="defaultCheck4">Disabled Checked</label>
                            </div>
                            <form class="was-validated">
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck5" checked required>
                                    <label class="form-check-label" for="defaultCheck5">Checked Success</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck6" required>
                                    <label class="form-check-label" for="defaultCheck6">Unchecked Error</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 pb-2 grid-margin">
                        <h6 class="pb-3">Radio</h6>
                        <div class="miri-ui-kit-demo">
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" value="" id="defaultRadio1" name="demoRadio">
                                <label class="form-check-label" for="defaultRadio1">Radio off</label>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="radio" value="" id="defaultRadio2" name="demoRadio" checked>
                                <label class="form-check-label" for="defaultRadio2">Radio on</label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" value="" id="defaultRadio3" disabled>
                                <label class="form-check-label" for="defaultRadio3">Disabled radio off</label>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="radio" value="" id="defaultRadio4" disabled checked>
                                <label class="form-check-label" for="defaultRadio4">Disabled radio ofn</label>
                            </div>
                            

                            <div class="row">
                                <div class="col-md-6">
                                    <p class="font-weight-medium mb-1">Valid Checked</p>
                                    <form class="was-validated mb-3">
                                        <div class="form-check form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" value="" id="defaultRadio5" name="radio-invalid" checked>
                                            <label class="form-check-label" for="defaultRadio5">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="" id="defaultRadio6" name="radio-invalid" required>
                                            <label class="form-check-label" for="defaultRadio6">Female</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <p class="font-weight-medium mb-1">Invalid Unchecked</p>

                                    <form class="was-validated">
                                        <div class="form-check form-check-inline mb-1">
                                            <input class="form-check-input" type="radio" value="" id="defaultRadio7" name="radio-valid">
                                            <label class="form-check-label" for="defaultRadio7">Option 1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="" id="defaultRadio8" name="radio-valid" required>
                                            <label class="form-check-label" for="defaultRadio8">Option 2</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-2 grid-margin">
                        <h6 class="pb-3">Icon Only</h6>
                        <div class="row">
                            <div class="col-12">
                                <div class="miri-ui-kit-demo">
                                    <button class="btn btn-danger"><span class="mdi mdi-heart-outline"></span></button>
                                    <button class="btn btn-info"><span class="mdi mdi-laptop"></span></button>
                                    <button class="btn btn-primary"><span class="mdi mdi-calendar-text"></span></button>
                                    <button class="btn btn-success"><span class="mdi mdi-inbox"></span></button>
                                    <button class="btn btn-dark"><span class="mdi mdi-home"></span></button>
                                    <button class="btn btn-outline-success"><span class="mdi mdi-account-outline"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="miri-ui-kit-demo">
                                    <div class="miri-ui-kit-demo">
                                        <button class="btn btn-success btn-squared"><span class="mdi mdi-folder-outline"></span></button>
                                        <button class="btn btn-primary btn-squared"><span class="mdi mdi-comment-question-outline"></span></button>
                                        <button class="btn btn-dark btn-squared"><span class="mdi mdi-heart-outline"></span></button>
                                        <button class="btn btn-warning btn-squared"><span class="mdi mdi-heart-outline"></span></button>
                                        <button class="btn btn-danger btn-squared"><span class="mdi mdi-heart-outline"></span></button>
                                        <button class="btn btn-outline-primary btn-squared"><span class="mdi mdi-heart-outline"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="miri-ui-kit-demo">
                                    <button class="btn btn-outline-danger btn-rounded"><span class="mdi mdi-heart-outline"></span></button>
                                    <button class="btn btn-danger btn-rounded"><span class="mdi mdi-heart-outline"></span></button>
                                    <button class="btn btn-primary btn-rounded"><span class="mdi mdi-heart-outline"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-2 grid-margin">
                        <h6 class="pb-3">Range</h6>
                        <div class="form-group w-75">
                            <label for="formControlRange1">Default range</label>
                            <input type="range" class="form-control-range" id="formControlRange1">
                        </div>
                        <div class="form-group w-75">
                            <label for="formControlRange2">Range with values for min and max</label>
                            <input type="range" class="form-control-range" id="formControlRange2" min="10" max="50">
                        </div>
                    </div>
                    <div class="col-md-4 pb-2 grid-margin">
                        <h6 class="pb-3">Progress Bars</h6>
                        <div class="miri-ui-kit-demo">
                            <div class="progress mb-4 w-75">
                                <div class="progress-bar progress-bar-rounded bg-danger w-50" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress w-75">
                                <div class="progress-bar w-25" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-2 grid-margin">
                        <h6 class="pb-3">ToggleButtons</h6>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">Unchecked switch</label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Checked switch</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h6 class="pb-3" class="mb-4">Badges</h6>
                        <div class="miri-ui-kit-demo mb-4">
                            <span class="badge badge-pill badge-danger">Danger</span>
                            <span class="badge badge-pill badge-info">Info</span>
                            <span class="badge badge-pill badge-primary">Primary</span>
                            <span class="badge badge-pill badge-success">Success</span>
                            <span class="badge badge-pill badge-warning">Warning</span>
                            <span class="badge badge-pill badge-dark">Labels</span>
                        </div>
                        <div class="miri-ui-kit-demo mb-4">
                                <span class="badge badge-danger">Danger</span>
                                <span class="badge badge-info">Info</span>
                                <span class="badge badge-primary">Primary</span>
                                <span class="badge badge-success">Success</span>
                                <span class="badge badge-warning">Warning</span>
                                <span class="badge badge-dark">Labels</span>
                            </div>
                    </div>
                </div>
            </div>
            <div class="card-body mb-4">
                <h2 class="card-title">Pagination</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                                <li class="page-item"><a class="page-link d-none d-sm-block" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link d-none d-sm-block" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                        <nav aria-label="Page navigation example 3">
                            <ul class="pagination pagination-pill">
                                <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link d-none d-sm-block" href="#">4</a></li>
                                <li class="page-item"><a class="page-link d-none d-sm-block" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-6">
                        <nav aria-label="Page navigation example 3">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link d-none d-sm-block" href="#">1</a></li>
                                <li class="page-item"><a class="page-link d-none d-sm-block" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                        <nav aria-label="Page navigation example 3">
                            <ul class="pagination pagination-pill">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link d-none d-sm-block" href="#">4</a></li>
                                <li class="page-item"><a class="page-link d-none d-sm-block" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="card-body mb-4">
                <h2 class="card-title">Pills</h2>
                <div class="row">
                    <div class="col-lg-6 grid-margin">
                        <h6 class="pb-3" class="mb-4">Navigation tabs</h6>
                        <ul class="nav nav-tabs" id="myTab1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1"
                                    aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1"
                                    aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="message-tab1" data-toggle="tab" href="#message1" role="tab" aria-controls="message1"
                                    aria-selected="false">Messsage</a>
                            </li>
                        </ul>
                        <div class="tab-content mb-5" id="myTabConten1t">
                            <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab1">
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem dolore dignissimos totam tempora earum accusantium beatae eligendi, expedita amet a?
                                </p> 
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem dolore dignissimos totam tempora earum accusantium beatae eligendi, expedita amet a?
                                </p> 
                            </div>
                            <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab1">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum officia eos possimus nisi quos nesciunt sint enim minus quo ut porro totam optio
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum officia eos possimus nisi quos nesciunt sint enim minus quo ut porro totam optio
                                </p>
                            </div>
                            <div class="tab-pane fade" id="message1" role="tabpanel" aria-labelledby="message-tab1">
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam iste, facilis architecto ullam quis iusto at cumque vel repellat natus totam similique harum.
                                </p>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam iste, facilis architecto ullam quis iusto at cumque vel repellat natus totam similique harum.
                                </p>.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin">
                        <h6 class="pb-3" class="mb-4">Navigation tabs</h6>
                        <ul class="nav nav-pills nav-pills-icon-rounded mb-2" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab2" data-toggle="tab" href="#" role="tab" aria-controls="home2"
                                    aria-selected="false"><i class="mdi mdi-medical-bag"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab2" data-toggle="tab" href="#" role="tab" aria-controls="profile2"
                                    aria-selected="true"><i class="mdi mdi-account-multiple"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="message-tab2" data-toggle="tab" href="#" role="tab" aria-controls="message2"
                                    aria-selected="false"><i class="mdi mdi-heart-outline"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="customize-tab2" data-toggle="tab" href="#" role="tab" aria-controls="customize2"
                                    aria-selected="false"><i class="mdi mdi-format-paint"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 grid-margin">
                        <h6 class="pb-3" class="mb-3">Navigation Pills with icon</h6>
                        <ul class="nav nav-pills nav-pills-icon-text" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home3"
                                    aria-selected="true"><i class="mdi mdi-home"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="coupon-tab3" data-toggle="tab" href="#coupon3" role="tab" aria-controls="coupon3"
                                    aria-selected="false"><i class="mdi mdi-receipt"></i>Coupon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="trello-tab3" data-toggle="tab" href="#trello3" role="tab" aria-controls="trello3"
                                    aria-selected="false"><i class="mdi mdi-trello"></i> Trello</a>
                            </li>
                        </ul>
                        <div class="tab-content mb-5" id="myTabContent3">
                            <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum at voluptate praesentium quidem minima. Sapiente qui reiciendis exercitationem fuga sequi eos nisi reprehenderit minus, doloremque rem totam dolorum consectetur iste.</p>
                            </div>
                            <div class="tab-pane fade" id="coupon3" role="tabpanel" aria-labelledby="coupon-tab3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore excepturi quasi eius maxime dolores error. Id culpa, qui cum accusamus optio quasi voluptate magnam fugit quaerat nostrum nemo assumenda! Iure!</p>
                            </div>
                            <div class="tab-pane fade" id="trello3" role="tabpanel" aria-labelledby="trello-tab3">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum est iste cumque nisi, ex quia, vero et placeat a tenetur sapiente quibusdam saepe ea nulla pariatur perspiciatis. Asperiores, ratione provident.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin">
                        <h6 class="pb-3" class="mb-3">Navigation Pills with icon</h6>
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="nav nav-pills nav-pills-icon-text flex-column" id="myTab4" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home4"
                                            aria-selected="true"><i class="mdi mdi-home"></i>Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="address-tab4" data-toggle="tab" href="#address4" role="tab" aria-controls="address4"
                                            aria-selected="false"><i class="mdi mdi-map"></i>Address</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-8">
                                <div class="tab-content tab-content-vertical mb-5" id="myTabContent4">
                                    <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                                        <p>Lorem ipsum dolorsit amet consectetur adipisicing elit. Accusantium accusamus incidunt suscipit! In eum possimus excepturi
                                            odio.
                                        </p>
                                        <p>Lorem ipsum dolorsit amet consectetur adipisicing elit. Accusantium accusamus incidunt suscipit! 
                                            </p>
                                    </div>
                                    <div class="tab-pane fade" id="address4" role="tabpanel" aria-labelledby="address-tab4">
                                        <p>Lorem ipsum dolor sitamet consectetur, adipisicing elit. Nisi, excepturi. A ratione mollitia tenetur? Alias qui quisquam nam
                                        aliquid officiis at, pariatur.</p>
                                        <p>Lorem ipsum dolor sitamet consectetur, adipisicing elit. Nisi, excepturi. p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin">
                        <h6 class="pb-3" class="mb-3">Navigation tabs</h6>
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-pills flex-column flex-sm-row" id="myTab5" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home5"
                                            aria-selected="true"><i class="mdi mdi-home mr-2"></i>Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile5"
                                            aria-selected="false"><i class="mdi mdi-account-circle mr-2"></i>Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="message-tab5" data-toggle="tab" href="#message5" role="tab" aria-controls="message5"
                                            aria-selected="false"><i class="mdi mdi-email mr-2"></i>Message</a>
                                    </li>
                                </ul>
                                <div class="tab-content pt-4" id="myTabContent5">
                                    <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5">
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil delectus amet commodi? Doloribus unde incidunt, omnis et labore suscipit consequatur</p>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil delectus amet commodi? Doloribus unde incidunt, omnis et labore suscipit consequatur</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt numquam obcaecati iusto excepturi voluptatibus praesentium eum maiores enim minus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt numquam obcaecati iusto excepturi voluptatibus praesentium eum maiores enim minus.</p>
                                    </div>
                                    <div class="tab-pane fade" id="message5" role="tabpanel" aria-labelledby="message-tab5">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut minus delectus quibusdam officia nemo, labore, commodi repudiandae, veritatis culpa quos perferendis sint nisi!</p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut minus delectus quibusdam officia nemo, labore, commodi repudiandae, veritatis culpa quos perferendis sint nisi!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin">
                        <h6 class="pb-3" class="mb-3">Navigation tabs</h6>
                        <div class="card card-tab">
                            <div class="card-header">
                                <ul class="nav nav-pills card-header-pills flex-column flex-sm-row" id="myTab6" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab6" data-toggle="tab" href="#home6" role="tab" aria-controls="home6"
                                            aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab6" data-toggle="tab" href="#profile6" role="tab" aria-controls="profile6"
                                            aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="message-tab6" data-toggle="tab" href="#message6" role="tab" aria-controls="message6"
                                            aria-selected="false">Message</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content pt-0" id="myTabContent6">
                                    <div class="tab-pane fade show active" id="home6" role="tabpanel" aria-labelledby="home-tab6">
                                        <p>Lorem ipsum dolor amet consectetur adipisicing elit. possimus molestias, sequi ullam maxime repudiandae ipsum nihil
                                        officia fugiat quas</p>
                                        <p>Lorem ipsum dolor amet consectetur adipisicing elit. possimus molestias, sequi ullam maxime repudiandae ipsum nihil
                                        officia fugiat quas</p>
                                    </div>
                                    <div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile-tab6">
                                        <p>Lorem ipsum dolor sit
                                        amet consectetur adipisicing elit. Deleniti quisquam eos debitis eius ipsum impedit eum molestiae iure.</p>
                                        <p>Lorem ipsum dolor sit
                                                amet consectetur adipisicing elit. Deleniti quisquam eos debitis eius ipsum impedit eum molestiae iure.</p>
                                    </div>
                                    <div class="tab-pane fade" id="message6" role="tabpanel" aria-labelledby="message-tab6">
                                        <p>Lorem ipsum dolor, sit
                                        amet consectetur adipisicing elit. Fugit nemo laudantium praesentium sequi ab officia</p>
                                        <p>Lorem ipsum dolor, sit
                                                amet consectetur adipisicing elit. Fugit nemo laudantium praesentium sequi ab officia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body mb-4">
                <h2 class="card-title">Alerts (Notifications)</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-primary" role="alert">
                            A simple primary alert—check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                            A success alert—check it out!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i aria-hidden="true" class="mdi mdi-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="alert alert-warning" role="alert">
                            <i class="mdi mdi-bell-outline"></i> A warning alert—check it out!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i aria-hidden="true" class="mdi mdi-close"></i>
                            </button>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <i class="mdi mdi-bell-outline"></i> A danger alert—check it out!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i aria-hidden="true" class="mdi mdi-close"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body mb-4">
                <h2 class="card-title">Navigation</h2>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2">
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.svg" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
                        aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Templates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Elements</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <button class="btn btn-outline-success bg-white mr-2">Buy Now</button>
                            <button class="btn btn-danger">Discover</button>
                        </ul>
                    </div>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-2">
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.svg" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Templates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-icon" href="#"><i class="mdi mdi-linkedin-box"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-icon" href="#"><i class="mdi mdi-facebook-box"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-icon" href="#"><i class="mdi mdi-twitter-box"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-icon" href="#"><i class="mdi mdi-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-dark bg-success mb-2">
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.svg" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent3"
                        aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Templates</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Category</a>
                                    <a href="#" class="dropdown-item">Tags</a>
                                    <a href="#" class="dropdown-item">Layout</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="#">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Category</a>
                                    <a href="#" class="dropdown-item">Tags</a>
                                    <a href="#" class="dropdown-item">Layout</a>
                                </div>
                            </li>
                            <form action="#" class="form-inline mr-2">
                                <button class="btn btn-primary"><i class="mdi mdi-account mr-2"></i>Signin</button>
                            </form>
                            <li class="nav-item">
                                <a class="nav-link nav-icon" href="#"><i class="mdi mdi-magnify"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-icon" href="#"><i class="mdi mdi-cart"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-dark bg-danger mb-2">
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.svg" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent4"
                        aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent4">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="mdi mdi-facebook-box mr-2"></i>Facebook</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="mdi mdi-twitter-box mr-2"></i>Twitter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="mdi mdi-instagram mr-2"></i>Instagram</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="card-body mb-4">
                <h2 class="card-title">Images</h2>
                <figure class="d-inline-block mr-4">
                    <img src="./assets/images/img_1.jpg" alt="demo">
                    <figcaption class="text-center py-3 font-weight-medium text-black">Image</figcaption>
                </figure>
                <figure class="d-inline-block mr-4">
                    <img src="./assets/images/img_4.jpg" alt="demo" class="rounded-circle">
                    <figcaption class="text-center py-3 font-weight-medium text-black">Circle</figcaption>
                </figure>
                <figure class="d-inline-block mr-4">
                    <img src="./assets/images/img_2.jpg" alt="demo" class="img-rounded img-raised">
                    <figcaption class="text-center py-3 font-weight-medium text-black">Raised</figcaption>
                </figure>
                <figure class="d-inline-block mr-4">
                    <img src="./assets/images/img_3.jpg" alt="demo" class="rounded-circle img-raised">
                    <figcaption class="text-center py-3 font-weight-medium text-black">Circle Raised</figcaption>
                </figure>

            </div>
            <div class="card-body mb-4">
                <h2 class="card-title">Bootstrap Carousel</h2>
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="./assets/images/banner.jpg" class="d-block w-100" alt="banner">
                          <div class="carousel-caption d-none d-md-block">
                            <h1>Miri UI Kit</h1>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/banner.jpg" class="d-block w-100" alt="banner">
                          <div class="carousel-caption d-none d-md-block">
                            <h1>Clean Design</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/banner.jpg" class="d-block w-100" alt="banner">
                          <div class="carousel-caption d-none d-md-block">
                            <h1>Fully Responsive</h1>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <i class="mdi mdi-chevron-left"></i>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <i class="mdi mdi-chevron-right"></i>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>
            </div>
        </div>
        <section class="example-section py-5">
            <h2 class="text-center text-white">Completed with examples</h2>
            <div class="row">
                <div class="col-md-4">
                    <figure class="text-center mb-4">
                        <a href="landing.html" class="preview-link" target="_blank">
                            <img src="assets/images/UI-kit-image-1.jpg" alt="Landing page" class="img-thumbnail">
                        </a>
                        <figcaption class="text-center">Landing page</figcaption>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="text-center mb-4">
                        <a href="login.html" class="preview-link" target="_blank">
                            <img src="assets/images/UI-kit-image-2.jpg" alt="Olgin page" class="img-thumbnail">
                        </a>
                        <figcaption class="text-center">Login page</figcaption>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="text-center mb-4">
                        <a href="profile.html" class="preview-link" target="_blank">
                            <img src="assets/images/UI-kit-image-3.jpg" alt="Profile page" class="img-thumbnail">
                        </a>
                        <figcaption class="text-center">Profile page</figcaption>
                    </figure>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="container">
            <section class="footer-content text-center text-white pt-4">
                <h1 class="text-white">Clean and simple ui kit built with Bootstrap 4</h1>
                <p>If there is something we can help you with, just let us know. We'll be more than happy to offer you our help.</p>
                <button class="btn btn-success">Download Now</button>
            </section>
            <nav class="navbar navbar-dark bg-transparent navbar-expand d-block d-sm-flex text-center">
                <span class="navbar-text">&copy; BootstrapDash. All rights reserved.</span>
                <div class="navbar-nav ml-auto justify-content-center">
                    <a href="#" class="nav-link">Support</a>
                    <a href="#" class="nav-link">Terms</a>
                    <a href="#" class="nav-link">Privacy</a>
                </div>
            </nav>
        </div>
    </footer>
    <script src="{{asset('src/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('src/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('src/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('src/js/miri-ui-kit.js')}}"></script>
</body>
</html>
<?php include('header.php') ?>
<style type="text/css">
    select, input{
        display: block;
        width: 100%;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.25;
        color: #495057;
        background-color: #fff;
        background-image: none;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: .25rem;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
    .paginate_button{
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.25;
        border-radius: .25rem;
        transition: all .15s ease-in-out;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    } 

    #header_wrap{
        text-align: center;
    }
    #title_wrap{
        text-align: center;
    }
    .cbo_wrap{
        width: 200px;
    }
</style>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <?php include('navfixed.php') ?>

    <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="students.php">Evaluation Form</a>
                </li>
                <!-- <li class="breadcrumb-item active">Students</li> -->
            </ol>
            <div class="container">
                <div id="header_wrap">
                        Republic of the Philippines <br>
                        <b>CARLOS HILADO MEMORIAL STATE COLLEGE</b> <br>
                        <?php echo CAMPUS ?>, Negros Occidental
                </div>
                <br>
                <div id="title_wrap">
                        <strong>ANSWER SHEET</strong> <br>
                       Faculty Performance Evaluation Instrument for Students<br>
                </div>
                <br>
                <div id="info_wrap">
                    <table align="center">
                        <tr>
                            <td>Faculty Name:</td>
                            <td>
                               <select class="cbo_wrap">
                                   <option>-select-</option>
                               </select>
                            </td>
                                <td width="20%"></td>
                                <td>Semester:</td>
                            <td>
                                <select class="cbo_wrap">
                                   <option>-select-</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Subject:</td>
                            <td>
                                <select class="cbo_wrap">
                                    <option>-select-</option>
                                    </select>
                            </td>
                            <td></td>
                                <td>School Year ::</td>
                            <td>
                                <select class="cbo_wrap">
                                    <option>-select-</option>
                                    
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
                <div id="legend">
                        <strong>Legend:</strong> <br>
                        <strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 5 - Outstanding &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp (O)</strong> <br>
                        <strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 4 - Very Satisfactory &nbsp &nbsp &nbsp (VS)</strong> <br>
                        <strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 3 - Satisfactory &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp(S)</strong> <br>
                        <strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 2 - Unsatisfactory &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp(UN)</strong> <br>
                        <strong>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 1 - Poor &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp (P)</strong> <br>
                <br>
                </div>
                <div id="teaching">
                    <strong>I. TEACHING EFFECTIVENESS</strong>
                </div>
                <div id="commitment" >
                    <table width="100%" border="1">
                        <tr>
                            <td width="50%"><strong>A.Commitment</strong></td>
                            <td align="center" width="10%">P</td>
                            <td align="center" width="10%">UN</td>
                            <td align="center" width="10%">S</td>
                            <td align="center" width="10%">VS</td>
                            <td align="center" width="10%">O</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">Total</td>
                            <td colspan="5" align="center" width="10%"></td>
                        </tr>
                    </table>
                    <table width="100%" border="1">
                        <tr>
                            <td width="50%"><strong>B. Knowledge of the Subject </strong></td>
                            <td align="center" width="10%">P</td>
                            <td align="center" width="10%">UN</td>
                            <td align="center" width="10%">S</td>
                            <td align="center" width="10%">VS</td>
                            <td align="center" width="10%">O</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">Total</td>
                            <td colspan="5" align="center" width="10%"></td>
                        </tr>
                    </table>
                    <table width="100%" border="1">
                        <tr>
                            <td width="50%"><strong>C. Teaching for Independent Learning</strong></td>
                            <td align="center" width="10%">P</td>
                            <td align="center" width="10%">UN</td>
                            <td align="center" width="10%">S</td>
                            <td align="center" width="10%">VS</td>
                            <td align="center" width="10%">O</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">Total</td>
                            <td colspan="5" align="center" width="10%"></td>
                        </tr>
                    </table>
                    <table width="100%" border="1">
                        <tr>
                            <td width="50%"><strong>D. Management of Learning</strong></td>
                            <td align="center" width="10%">P</td>
                            <td align="center" width="10%">UN</td>
                            <td align="center" width="10%">S</td>
                            <td align="center" width="10%">VS</td>
                            <td align="center" width="10%">O</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">Total</td>
                            <td colspan="5" align="center" width="10%"></td>
                        </tr>
                    </table>
                    <table width="100%" border="1">
                        <tr>
                            <td width="50%"><strong>II. PROFESSIONALISM</strong></td>
                            <td align="center" width="10%">P</td>
                            <td align="center" width="10%">UN</td>
                            <td align="center" width="10%">S</td>
                            <td align="center" width="10%">VS</td>
                            <td align="center" width="10%">O</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td width="50%"></td>
                            <td align="center" width="10%">1</td>
                            <td align="center" width="10%">2</td>
                            <td align="center" width="10%">3</td>
                            <td align="center" width="10%">4</td>
                            <td align="center" width="10%">5</td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">Total</td>
                            <td colspan="5" align="center" width="10%"></td>
                        </tr>
                    </table>
                    <textarea cols="136" rows="6" id="comment_entered"> On the space below, write your comments and suggestions to improve instruction.</textarea>
                </div>
            </div>
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Faculty Evaluation 2017</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>  
        </div>
    </div>
</body>
<script type="text/javascript">
</script>
<?php include('scripts.php'); ?>

</html>

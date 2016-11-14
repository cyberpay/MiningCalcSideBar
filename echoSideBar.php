<?php function echoTopHalf() {
    echo "


    <div id='wrapper'>
        <div class='overlay'></div>
    
        <!-- Sidebar -->
        <nav class='navbar navbar-inverse navbar-fixed-top' id='sidebar-wrapper' role='navigation'>
            <ul class='nav sidebar-nav'>
                <li class='sidebar-brand'>
                    <a href='#'>
                       Mining Calculators
                    </a>
                </li>
                <li>
                    <a href='../BitcoinMiningCalculator'><i class='fa fa-fw fa-chevron-right'></i>Bitcoin</a>
                </li>
                <li>
                    <a href='../EthereumMiningCalculator'><i class='fa fa-fw fa-chevron-right'></i>Ethereum</a>
                </li>
                <li>
                    <a href='../ZCashMiningCalculator'><i class='fa fa-fw fa-chevron-right'></i>ZCash</a>
                </li>
                <li>
                    <a href='../ZClassicMiningCalculator'><i class='fa fa-fw fa-chevron-right'></i>ZClassic</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id='page-content-wrapper'>
          <button type='button' class='hamburger is-closed animated fadeInLeft' data-toggle='offcanvas' id='desktopMenuButton'>
            <div id='menuText'><h5 style='position: relative; left: 35px; bottom: 2px; white-space:nowrap;'>More Calculators</h5></div>
            <span class='hamb-top'></span>
            <span class='hamb-middle'></span>
            <span class='hamb-bottom'></span>
          </button>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-10 col-lg-offset-1'>";
}
function echoBottomHalf() {
    echo "
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

    <script src='../MiningCalcSideBar/js/index.js'></script>
";
}
?>
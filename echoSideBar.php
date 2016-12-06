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
                    <a href='../BitcoinMiningCalculator'><img src='../images/BTC.png'> Bitcoin (BTC)</a>
                </li>
                <li>
                    <a href='../EthereumMiningCalculator'><img src='../images/ETH.png'> Ethereum (ETH)</a>
                </li>
                <li>
                    <a href='../EthereumClassicMiningCalculator'><img src='../images/ETC.png'> Eth Classic (ETC)</a>
                </li>
                <li>
                    <a href='../MoneroMiningCalculator'><img src='../images/XMR.png'> Monero (XMR)</a>
                </li>
                <li>
                    <a href='../ZCashMiningCalculator'><img src='../images/ZEC.png'> ZCash (ZEC)</a>
                </li>
                <li>
                    <a href='../ZClassicMiningCalculator'><img src='../images/ZCL.png'> ZClassic (ZCL)</a>
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
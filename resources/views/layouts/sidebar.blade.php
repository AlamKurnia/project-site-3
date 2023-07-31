<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard<span class="badge badge-info right"></span></p>
            </a>
        </li>
        <li class="nav-header">Calendar</li>
        <li class="nav-item">
            <a href="/calendar" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>Jadwal Kerja<span class="badge badge-info right"></span></p>
            </a>
        </li>
        {{-- add nama grup PPIC disini --}}
        <li class="nav-header">PPIC</li>

        {{-- add level PPIC disini --}}
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Items<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>All Items</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-folder-plus nav-icon"></i>
                        <p>Add Items</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Bill of Materials<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>All List BOM</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-folder-plus nav-icon"></i>
                        <p>Add BOM</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>On Process<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>SPKP List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-folder-plus nav-icon"></i>
                        <p>Add New SPKP</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-magnifying-glass-dollar nav-icon"></i>
                        <p>Forecast</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Master Prod Schedule</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-chart-area"></i>
                        <p>Material Req Planning</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Purchase<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-cart-shopping nav-icon"></i>
                        <p>Purchase Request</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Warehouse<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Stock Inv</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Stock Non-Inv</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Reports<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Goods Received</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Delivery Note</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Production Result</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Level Inventory</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Materials Consumption</p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- add nama grup PRODUKSI disini --}}
        <li class="nav-header">PRODUCTION</li>

        {{-- add level PRODUKSI disini --}}
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>On Process<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>SPKP List</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>FPA List</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Maintenance<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-gears nav-icon"></i>
                        <p>WO Progress</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-calendar-plus nav-icon"></i>
                        <p>Add New WO</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Reports<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Monthly Report</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Production Result</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>SPC</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Reject Items</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Powder Inv Details</p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- add nama grup WAREHOUSE disini --}}
        <li class="nav-header">WAREHOUSE</li>

        {{-- add level WAREHOUSE disini --}}
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Items<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>All Items</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-folder-plus nav-icon"></i>
                        <p>Add Items</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>On Process<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>SPKP List</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Incoming Trx<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Goods Received</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Transfer Slip</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Return To Stock</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Adjustment In</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Outgoing Trx<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Issuence Slip</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Delivery Note</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Adjustment Out</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Maintenance<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-gears nav-icon"></i>
                        <p>WO Progress</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-calendar-plus nav-icon"></i>
                        <p>Add New WO</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Warehouse<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Stock Inv</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Stock Non-Inv</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Reports<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Monthly Report</p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- add nama grup QUALITY CONTROL disini --}}
        <li class="nav-header">QUALITY CONTROL</li>

        {{-- add level QUALITY CONTROL disini --}}
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Document<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Product Spec</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Raw Materials Spec</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Packaging Spec</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Items<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>All Items</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>On Process<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>SPKP List</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>FPA List</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Maintenance<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-gears nav-icon"></i>
                        <p>WO Progress</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-calendar-plus nav-icon"></i>
                        <p>Add New WO</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Reports<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Monthly Report</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Recap FPA</p>
                    </a>
                </li>
            </ul>
        </li>
        {{-- add nama grup MAINTENANCE disini --}}
        <li class="nav-header">MAINTENANCE</li>

        {{-- add level MAINTENANCE disini --}}
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Document<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Product Spec</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Raw Materials Spec</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>Packaging Spec</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Items<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>All Items</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>On Process<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>SPKP List</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-list-check nav-icon"></i>
                        <p>FPA List</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Maintenance<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-gears nav-icon"></i>
                        <p>WO Progress</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-calendar-plus nav-icon"></i>
                        <p>Add New WO</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa-solid fa-folder-tree nav-icon"></i>
                <p>Reports<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Monthly Report</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-book nav-icon"></i>
                        <p>Recap FPA</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

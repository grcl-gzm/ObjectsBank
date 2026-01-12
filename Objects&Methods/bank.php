<!-- 
Name: Graciela Gozum
Date: 01/12/25
Section: WD-201 
-->

<?php
include "classes/Account.php";
include "classes/Customer.php";
include "includes/header.php";

$accounts = [
    new Account("1347", "Savings", 20000),
    new Account("1348", "Checking", -500),
    new Account("1444", "Emergency Funds", 55644),
    new Account("1488", "Investment", -1300)
];

$customer = new Customer("Bond","Forger", $accounts);
?>


<main>    
    <section class="account-summary">
        <h2><?php echo $customer->getFullName(); ?></h2>

        <table class="accounts-table">
           <thead>
                <tr>
                    <th>Account No.</th>
                    <th>Type</th>
                    <th>Balance</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($customer->accounts as $account): ?>
                <tr>
                    <td><?php echo $account->number; ?></td>
                    <td><?php echo $account->type; ?></td>

                    <?php if ($account->balance >= 0): ?>
                        <td class="credit">
                            ₱<?php echo number_format($account->balance, 2); ?>
                        </td>
                    <?php else: ?>
                        <td class="overdrawn">
                            ₱<?php echo number_format($account->balance, 2); ?>
                        </td>
                    <?php endif; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>

<?php include "includes/footer.php"; ?>
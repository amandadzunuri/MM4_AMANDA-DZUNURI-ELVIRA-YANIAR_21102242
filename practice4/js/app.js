document.getElementById("book-request-form").addEventListener("submit", function (e) {
    e.preventDefault();

    const bookTitle = document.getElementById("book-title").value;
    const userName = document.getElementById("user-name").value;
    const userNIM = document.getElementById("user-nim").value;
    const bookSeries = document.getElementById("book-series").value;
    const loanDays = document.getElementById("loan-days").value;

    const confirmationMessage = `Permintaan peminjaman buku "${bookTitle}" oleh ${userName} (NIM: ${userNIM}), Seri Buku: ${bookSeries}, untuk ${loanDays} hari telah diajukan. Kami akan segera memprosesnya.`;

    document.getElementById("confirmation").innerText = confirmationMessage;
});

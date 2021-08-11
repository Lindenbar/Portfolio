let username = 'Lindenbar'

GitHubActivity.feed({
    username: username,
    selector: "#gitActivity",
    limit: 25
});

GitHubCalendar("#gitCalendar", username, { responsive: true });
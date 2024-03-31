function getDomainFromEmail(email) {
  const parts = email.split('@');

  if (parts.length > 2) {
    return console.log('Invalid email address!');
  }

  const domain = parts[1];

  return domain;
}

const email = "user@example.com";
const domain = getDomainFromEmail(email);

if (domain !== undefined) console.log(domain);

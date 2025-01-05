<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Email Template</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #dddddd; background-color: #ffffff; margin: 20px auto; padding: 20px; border-radius: 8px;">
        <tr>
            <td align="center" style="font-size: 24px; font-weight: bold; color: #333333; padding-bottom: 20px;">
                Contact Us Form Submission
            </td>
        </tr>
        <tr>
            <td style="font-size: 14px; color: #555555; padding-bottom: 10px;">
                <strong>Name:</strong>
                <span style="color: #000000;">{{ $details['name'] ?? '' }}</span>
            </td>
        </tr>
        <tr>
            <td style="font-size: 14px; color: #555555; padding-bottom: 10px;">
                <strong>Email:</strong>
                <span style="color: #000000;">{{ $details['email'] ?? '' }}</span>
            </td>
        </tr>
        <tr>
            <td style="font-size: 14px; color: #555555; padding-bottom: 10px;">
                <strong>Phone:</strong>
                <span style="color: #000000;">{{ $details['phone'] ?? '' }}</span>
            </td>
        </tr>
        <tr>
            <td style="font-size: 14px; color: #555555; padding-bottom: 10px;">
                <strong>Subject:</strong>
                <span style="color: #000000;">{{ $details['subject'] ?? '' }}</span>
            </td>
        </tr>
        <tr>
            <td style="font-size: 14px; color: #555555; padding-bottom: 20px;">
                <strong>Message:</strong>
                <span style="color: #000000;">{{ $details['message'] ?? '' }}</span>
            </td>
        </tr>
        <tr>
            <td align="center" style="font-size: 12px; color: #aaaaaa; padding-top: 20px;">
                This message was sent via the contact form.
            </td>
        </tr>
    </table>
</body>
</html>
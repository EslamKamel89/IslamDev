<div style="margin: 0; padding: 0; background-color: #f9f9f9; font-family: Arial, sans-serif;">
    <!-- Email Container -->
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">

        <!-- Header -->
        <div style="background-color: #f97316; color: #ffffff; padding: 20px; text-align: center;">
            <h1 style="margin: 0; font-size: 24px;">You’ve Received a New Message</h1>
            <p style="margin: 5px 0 0 0; font-size: 14px; opacity: 0.9;">via islamdev.com/contact</p>
        </div>

        <!-- Body -->
        <div style="padding: 24px; color: #333; line-height: 1.6;">
            <p style="font-size: 16px;"><strong>Hello Islam,</strong></p>
            <p style="font-size: 14px;">
                A new contact message has been submitted through your portfolio website.
            </p>

            <hr style="border: none; border-top: 1px solid #eee; margin: 20px 0;">

            <!-- Message Details -->
            <table width="100%" cellpadding="0" cellspacing="0" style="font-size: 14px; background-color: #fef3e3; padding: 16px; border-left: 4px solid #f97316; border-radius: 4px;">
                <tr>
                    <td><strong>From:</strong></td>
                    <td>{{ $name }}
                        <{{ $email }}>
                    </td>
                </tr>
                <tr>
                    <td><strong>Message:</strong></td>
                    <td>{{ $content }}</td>
                </tr>
                <tr>
                    <td><strong>Submitted at:</strong></td>
                    <td>{{ $submitted_at }}</td>
                </tr>


            </table>



            <!-- CTA Button -->
            <div style="text-align: center; margin-top: 30px;">
                <a href="https://islamdev.com/admin/messages" style="display: inline-block; background-color: #f97316; color: #fff; text-decoration: none; font-weight: bold; padding: 12px 24px; border-radius: 6px; font-size: 14px;">
                    View All Messages
                </a>
            </div>

            <!-- Footer -->
            <div style="text-align: center; font-size: 12px; color: #888; margin-top: 24px; border-top: 1px solid #eee; padding-top: 16px;">
                This message was sent from your portfolio contact form.
                <br>
                <strong>You're receiving this because you're awesome.</strong>
            </div>
        </div>
    </div>
</div>
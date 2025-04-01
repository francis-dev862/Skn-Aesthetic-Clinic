document.addEventListener("DOMContentLoaded", function () {
    const { useState } = React;

    function CredentialsForm() {
        const [formData, setFormData] = useState({
            firstName: "",
            lastName: "",
            email: "",
            phone: "",
            paymentMode: "",
            comments: "",
            rememberMe: false,
            privacyPolicy: false,
            cancellationPolicy: false,
        });

        const handleChange = (e) => {
            const { name, value, type, checked } = e.target;
            setFormData({
                ...formData,
                [name]: type === "checkbox" ? checked : value,
            });
        };

        const handleSubmit = async (e) => {
            e.preventDefault();

            if (!formData.privacyPolicy || !formData.cancellationPolicy) {
                alert("You must agree to the policies.");
                return;
            }

            try {
                const response = await fetch("http://localhost/backend/process_form.php", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(formData),
                });

                const data = await response.json();

                if (data.success) {
                    alert("Form submitted successfully!");
                } else {
                    alert("Error: " + data.message);
                }
            } catch (error) {
                alert("Failed to connect to the server.");
            }
        };

        return (
            React.createElement("div", { className: "container" },
                React.createElement("h2", null, "Enter Your Details"),
                React.createElement("form", { onSubmit: handleSubmit },
                    React.createElement("div", { className: "input-group" },
                        React.createElement("input", { type: "text", name: "firstName", placeholder: "First Name", onChange: handleChange, required: true }),
                        React.createElement("input", { type: "text", name: "lastName", placeholder: "Last Name", onChange: handleChange, required: true })
                    ),
                    React.createElement("div", { className: "input-group" },
                        React.createElement("input", { type: "email", name: "email", placeholder: "Email", onChange: handleChange, required: true }),
                        React.createElement("input", { type: "tel", name: "phone", placeholder: "Mobile Phone", onChange: handleChange, required: true })
                    ),
                    React.createElement("select", { name: "paymentMode", onChange: handleChange, required: true },
                        React.createElement("option", { value: "", disabled: true, selected: true }, "Mode of Payment"),
                        React.createElement("option", { value: "credit" }, "Credit Card"),
                        React.createElement("option", { value: "debit" }, "Debit Card"),
                        React.createElement("option", { value: "gcash" }, "Gcash")
                    ),
                    React.createElement("textarea", { name: "comments", placeholder: "Enter any additional comments...", onChange: handleChange }),
                    React.createElement("div", { className: "checkbox-group" },
                        React.createElement("label", null,
                            React.createElement("input", { type: "checkbox", name: "rememberMe", onChange: handleChange }),
                            "Remember Me"
                        ),
                        React.createElement("label", null,
                            React.createElement("input", { type: "checkbox", name: "privacyPolicy", onChange: handleChange, required: true }),
                            "I agree to the ", React.createElement("a", { href: "#" }, "privacy policy")
                        )
                    ),
                    React.createElement("div", { className: "cancellation-policy" },
                        React.createElement("h3", null, "Cancellation Policy"),
                        React.createElement("p", null, "For cancellations or changes, contact us at (+63) 943692-4775 or ",
                            React.createElement("a", { href: "mailto:cc@sknbeautycentre.com" }, "cc@sknbeautycentre.com")
                        ),
                        React.createElement("label", null,
                            React.createElement("input", { type: "checkbox", name: "cancellationPolicy", onChange: handleChange, required: true }),
                            "I agree"
                        )
                    ),
                    React.createElement("button", { type: "submit", className: "continue-button" }, "Continue")
                )
            )
        );
    }

    ReactDOM.render(React.createElement(CredentialsForm), document.getElementById("root"));
});

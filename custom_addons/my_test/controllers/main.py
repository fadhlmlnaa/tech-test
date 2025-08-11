import json
from odoo import http
from odoo.http import request


class PublicUserAPI(http.Controller):
    @http.route("/api/public_users", auth="public", type="http", methods=["GET"], cors="*")
    def get_users_public(self):
        users = request.env["res.users"].sudo().search([])
        data = []
        for user in users:
            data.append(
                {
                    "id": user.id,
                    "name": user.name,
                    "login": user.login,
                }
            )
        return request.make_response(
            json.dumps(data),
            headers=[("Content-Type", "application/json")],
        )

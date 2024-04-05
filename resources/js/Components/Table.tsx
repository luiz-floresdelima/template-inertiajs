import { ChildrenProp } from "@/types"

function Table({ children }: ChildrenProp) {
    return (
        <table>
            {children}
        </table>
    )
}

export { Table }
